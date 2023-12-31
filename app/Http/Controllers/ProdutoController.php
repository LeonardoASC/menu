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
    public function __construct()  {

        // $this->middleware('permission:listar produtos');
        // $this->middleware('permission:listar produtos')->only(['show']);
    }

    public function index(Request $request)
    {
        // funcionando
        // $produtos = Produto::all();

        $termo = $request->input('termo');
        $produtos = Produto::query();

        if ($termo) {
            $produtos->where('nome', 'LIKE', '%' . $termo . '%');
        }

        $produtos = $produtos->get();

        return view('pages.produto.index', ['produtos' => $produtos,'termo' => $termo ,'request' => $request->all() ]);
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
            'descricao' => 'required|max:255',
            'categoria_id' => 'required|exists:mesas,id',
            'preco' => 'required|numeric|min:0',
            'imagem' => 'required|nullable|image|max:2048'
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
            'categoria_id.exists' => 'A categoria selecionada não existe.'
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
        $categorias = Categoria::all();
        return view('pages.produto.edit', ['produto' => $produto, 'categorias' => $categorias]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, produto $produto)
    {
        $regras = [
            'nome' => 'required|min:3|max:40',
            'descricao' => 'required|max:255',
            'categoria_id' => 'required|exists:mesas,id',
            'preco' => 'numeric|min:0',
            'imagem' => 'nullable'
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'nome.min' => 'O campo título deve ter no mínimo 3 caracteres',
            'nome.max' => 'O campo título deve ter no máximo 40 caracteres',
            'descricao.max' => 'O campo descrição deve ter no máximo 255 caracteres',
            'preco.numeric' => 'O campo preço deve ser um valor numérico',
            'preco.min' => 'O campo preço não pode ser um valor negativo',
            'categoria_id.exists' => 'A categoria selecionada não existe.'
        ];

        $request->validate($regras, $feedback);

        $produto->update($request->all());
        return redirect()->route('produto.index', ['produto' => $produto->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(produto $produto)
    {
        $produto->delete();
        return redirect()->route('produto.index');
    }

    public function buscar(Request $request)
    {
        $termo = $request->input('termo');
        $produtos = Produto::where('nome', 'LIKE', '%' . $termo . '%')->get();
        return view('produtos.busca', compact('produtos', 'termo'));
    }
}
