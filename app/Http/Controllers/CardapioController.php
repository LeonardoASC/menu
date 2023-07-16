<?php

namespace App\Http\Controllers;

use App\Models\Cardapio;
use App\Models\Produto;
use App\Http\Requests\StoreCardapioRequest;
use App\Http\Requests\UpdateCardapioRequest;
use Illuminate\Http\Request;

class CardapioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $produtos = Produto::all();

        $termo = $request->input('termo');
        $produtos = Produto::query();

        if ($termo) {
            $produtos->where('nome', 'LIKE', '%' . $termo . '%');
        }

        $produtos = $produtos->get();

        return view('pages.cardapio.index', ['produtos' => $produtos,'termo' => $termo, 'request' => $request->all() ]);
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
    public function store(StoreCardapioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cardapio $cardapio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cardapio $cardapio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCardapioRequest $request, Cardapio $cardapio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cardapio $cardapio)
    {
        //
    }

    public function realizarTarefa(Request $request)
    {
        return view('pages.cardapio.confirmar');

    }

}
