<?php

namespace App\Http\Controllers;

use App\Models\Administrativa;
use App\Http\Requests\StoreAdministrativaRequest;
use App\Http\Requests\UpdateAdministrativaRequest;
use App\Models\Comanda;
use App\Models\Mesa;
use App\Models\Pedido;
use App\Models\Cliente;

class AdministrativaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $somaValores = Comanda::sum('total');
        $mesasOcupadas = Mesa::where('status', 'ocupada')->count();
        $comandaAberta = Comanda::where('status', 1)->count();

        $produtoMaisComum = Pedido::select('nome')
        ->groupBy('nome')
        ->orderByRaw('COUNT(*) DESC')
        ->first();
        $nomeProdutoMaisComum = $produtoMaisComum->nome;

         $clientesAtivos = Cliente::all();

        return view('pagesadm.administrativa.index', [
            'somaValores' => $somaValores,
            'mesasOcupadas' => $mesasOcupadas,
            'comandaAberta' => $comandaAberta,
            'nomeProdutoMaisComum' => $nomeProdutoMaisComum,
            'clientesAtivos' => $clientesAtivos
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
    public function store(StoreAdministrativaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Administrativa $administrativa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Administrativa $administrativa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdministrativaRequest $request, Administrativa $administrativa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Administrativa $administrativa)
    {
        //
    }
}
