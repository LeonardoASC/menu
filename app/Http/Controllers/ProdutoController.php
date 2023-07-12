<?php

namespace App\Http\Controllers;

use App\Models\produto;
use App\Http\Requests\StoreprodutoRequest;
use App\Http\Requests\UpdateprodutoRequest;
use Illuminate\Http\Request;


class ProdutoController extends Controller
{
    //caso precise de autenticação
    // public function __construct()  {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        $produtos = produto::all();
        // dd($produtos);
        return view('pages.produto', ['produtos' => $produtos, 'request' => $request->all() ]);
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
    public function store(StoreprodutoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(produto $produto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(produto $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateprodutoRequest $request, produto $produto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(produto $produto)
    {
        //
    }
}
