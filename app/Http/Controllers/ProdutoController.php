<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Categoria;
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
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $produtos = Produto::all();

        return view('pages.produto.index', ['produtos' => $produtos, 'request' => $request->all() ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();

        return view('pages.produto.create', ['categorias' => $categorias]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $regras = [
            'nome' => 'required|min:3|max:40',
            'descricao' => 'max:255',
            'preco' => 'numeric|min:0',
            'imagem' => 'nullable|image|max:2048'
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'nome.min' => 'O campo título deve ter no mínimo 3 caracteres',
            'nome.max' => 'O campo título deve ter no máximo 40 caracteres',
            'descricao.max' => 'O campo descrição deve ter no máximo 255 caracteres',
            'preco.numeric' => 'O campo preço deve ser um valor numérico',
            'preco.min' => 'O campo preço não pode ser um valor negativo',
            'imagem.image' => 'O arquivo enviado para o campo imagem deve ser uma imagem válida',
            'imagem.max' => 'O tamanho do arquivo enviado para o campo imagem não pode exceder 2MB',
        ];

        $request->validate($regras, $feedback);

        // $categoria = new Categoria();
        // $categoria->nome = $request->get('nome');
        // $categoria->save();

        Produto::create($request->all());

        return redirect()->route('produto.index');
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
