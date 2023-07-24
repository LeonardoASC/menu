<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use App\Models\Comanda;
use App\Http\Requests\StoreMesaRequest;
use App\Http\Requests\UpdateMesaRequest;
use Illuminate\Http\Request;

class MesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $mesas = Mesa::with('comandas')->get();
        // $comandasDaMesa = $mesas->comandas; // Retorna uma coleção das comandas pertencentes a essa mesa

        $comanda = Comanda::all();
        // $mesaDaComanda = $comanda->mesas; // Retorna o objeto da mesa à qual a comanda pertence

        return view('pages.mesa.index', [
            'mesas' => $mesas,
            // 'comandasDaMesa' => $comandasDaMesa,
            // 'mesaDaComanda' => $mesaDaComanda,
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
    public function store(StoreMesaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Mesa $mesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mesa $mesa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMesaRequest $request, Mesa $mesa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mesa $mesa)
    {
        //
    }
}
