<?php

namespace App\Http\Controllers;

use App\Models\PedidoADM;
use App\Models\Pedido;
use App\Http\Requests\StorePedidoRequest;
use App\Http\Requests\UpdatePedidoRequest;
use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\Session;

class PedidoADMController extends Controller
{

    
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $pedidos = Pedido::with('cliente')->where('pedidos.status', 'Solicitado')->get();


        // Retorna a view passando os dados dos clientes e pedidos


        return view('pagesadm.pedidoadm.index', ['pedidos' => $pedidos, 'request' => $request->all() ]);
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
        // $pedido->cliente_id = session('cpf');

        $pedido->save();

        return redirect()->route('cardapio.index');
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
        // $pedido->update($request->all());
        // dd($request->all());
        // $pedido->status = 'Entregue';
        // $pedido->save();
        $pedido->update(['status' => $request->input('pedido_status')]);
        return redirect()->route('pedido.index', ['pedido' => $pedido->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedido $pedido)
    {
        //
    }
}
