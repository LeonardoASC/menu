<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Comanda;
use App\Http\Requests\StorePedidoRequest;
use App\Http\Requests\UpdatePedidoRequest;
use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\Session;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        // $pedidos = Pedido::where('status', 'Solicitado')
        //             // ->where('cliente_id', $user->id)
        //             ->get();

    // $cpf = $request->session()->get('cpf'); // Obtém o CPF do cliente da sessão
    // $pedidos = Pedido::where('status', 'Solicitado')
    //             ->where('cpf', $cpf)
    //             ->get();

    $cpf = $request->session()->get('cpf'); // Obtém o CPF do cliente da sessão
    $pedidos = Pedido::join('clientes', 'pedidos.cliente_id', '=', 'clientes.id')
                ->where('pedidos.status', 'Solicitado')
                ->where('clientes.cpf', $cpf)
                ->get(['pedidos.*']);
        return view('pages.pedido.index', ['pedidos' => $pedidos, 'request' => $request->all() ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $produtoId = $request->input('produto_id');

        $produtoNome = $request->input('produto_nome');
        $produtoQuantidade = $request->input('produto_quantidade');
        $produtoStatus = $request->input('produto_status');
        $produtoPreco = $request->input('produto_preco');
        $produtoDescricao = $request->input('produto_descricao');
        $pedidoObservacao = $request->input('pedido_observacao');
        $sessionCliente = Cliente::where('cpf', '=',session('cpf'))->get()->first();

        // Salve os valores na tabela de pedidos
        $pedido = new Pedido();
        $pedido->nome = $produtoNome;
        $pedido->quantidade = $produtoQuantidade;
        $pedido->status = $produtoStatus;
        $pedido->preco = $produtoPreco;
        $pedido->observacao = $pedidoObservacao;
        $pedido->cliente_id = $sessionCliente->id;
        $pedido->comanda_id = session()->get('idcomanda');
        // $pedido->cliente_id = session('cpf');
        // dd(session()->all());
        $pedido->save();



        return redirect()->route('cardapio.index')->with('message', 'Pedido realizado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pedido $pedido)
    {
        // dd($pedido);


        // $pedido->update(['status' => $request->input('pedido_status')]);
        // return redirect()->route('pedido.index', ['pedido' => $pedido->id])->with('success', 'Pedido atualizado com sucesso!');
        $status = $request->input('pedido_status');

    // Atualize o status do pedido
    $pedido->update(['status' => $status]);

    // Verifique se o pedido foi entregue
    if ($status === 'entregue') {
        // Encontre a comanda relacionada ao pedido
        $comanda = $pedido->comanda;

        // Recalcule o valor total da comanda com base nos pedidos entregues
        $valorTotalComanda = $comanda->pedidos->where('status', 'entregue')->sum('valor');

        // Atualize o valor total da comanda
        $comanda->update(['valor_total' => $valorTotalComanda]);
    }

    return redirect()->route('pedido.index')->with('success', 'Pedido atualizado com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedido $pedido)
    {
        //
    }
}
