<?php

namespace App\Http\Controllers;

use App\Models\Cardapio;
use App\Models\Produto;
use App\Models\Categoria;
use App\Http\Requests\StoreCardapioRequest;
use App\Http\Requests\UpdateCardapioRequest;
use Illuminate\Http\Request;

class CardapioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $categoriaId = NULL)
    {
        // $produtos = Produto::all();

        $termo = $request->input('termo');
        $categoriaId = $request->input('categoriaId');
        $produtos = Produto::query();

        if ($termo) {
            $produtos->where('nome', 'LIKE', '%' . $termo . '%');
        }


        if ($categoriaId) {
            $produtos->whereHas('categoria', function ($query) use ($categoriaId) {
                $query->where('id', $categoriaId);
            });
        }

        $produtos = $produtos->get();
        $categorias = Categoria::all();

        return view('pages.cardapio.index', [
            'produtos' => $produtos,
            'termo' => $termo,
            'categoriaId'=> $categoriaId,
            'categorias' => $categorias,
            'request' => $request->all()
        ]);
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
        //ainda nao implementado, possivel modal para confirmar o pedido
        return view('pages.cardapio.confirmar');

    }

    public function filtrar(Request $request)
    {
        $filtro = $request->input('filtro'); // Receba o valor do filtro do formulário

        $produtos = Produto::where('nome', 'like', "%$filtro%") // Filtro por nome
            ->orWhere('preco', '>=', $filtro) // Filtro por preço mínimo
            ->get();

        return view('produtos.index', compact('produtos'));
    }

}
