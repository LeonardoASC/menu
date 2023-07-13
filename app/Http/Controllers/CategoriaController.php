<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Http\Requests\StoreCategoriaRequest;
use App\Http\Requests\UpdateCategoriaRequest;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categorias = Categoria::all();
        return view('pages.categoria.index', ['categorias' => $categorias, 'request' => $request->all() ]);

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoriaRequest $request)
    {
        // $regras = [
        //     'nome' => 'required|min:3|max:40'
        // ];

        // $feedback = [
        //     'required' => 'O campo :attribute deve ser preenchido',
        //     'nome.min' => 'O campo nome de ter no mínimo 3 caracteres',
        //     'nome.max' => 'O campo nome de ter no máximo 40 caracteres',
        // ];

        // $request->validate($regras, $feedback);

        // $categoria = new Categoria();
        // $categoria->nome = $request->get('nome');
        // $categoria->save();

        Categoria::create($request->all());

        return redirect()->route('pages.categoria.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $Categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $Categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoriaRequest $request, Categoria $Categoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $Categoria)
    {
        //
    }
}
