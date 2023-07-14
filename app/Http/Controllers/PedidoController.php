<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Http\Requests\StorePedidoRequest;
use App\Http\Requests\UpdatePedidoRequest;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $pedidos = Pedido::all();

        return view('pages.pedido.index', ['pedidos' => $pedidos, 'request' => $request->all() ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produtoNome = $request->input('produto_nome');
        $produtoQuantidade = $request->input('produto_quantidade');
        $produtoPreco = $request->input('produto_preco');
        $produtoDescricao = $request->input('produto_descricao');

        // Salve os valores na tabela de pedidos
        $pedido = new Pedido();
        $pedido->nome = $produtoNome;
        $pedido->quantidade = $produtoQuantidade;
        $pedido->preco = $produtoPreco;
        $pedido->observacao = $produtoDescricao;
        $pedido->save();

        return redirect()->route('pedido.index');
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
    public function update(UpdatePedidoRequest $request, Pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedido $pedido)
    {
        //
    }
}
