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
        return view('pages.mesa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $regras = [
            // 'id' => 'required',
            'numero_cadeiras' => 'required|min:1|max:99',
            'status' => ''
        ];

        $feedback = [
            // 'id.required' => 'A mesa deve ser selecionada',
            'required' => 'O campo :attribute deve ser preenchido',
            'numero_cadeiras.min' => 'Mesa deve ter no mínimo 1 cadeira',
            'numero_cadeiras.max' => 'Mesa deve ter no maximo 99 cadeiras',
        ];

        $request->validate($regras, $feedback);

        Mesa::create($request->all());
        return redirect()->route('mesa.index');
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
        return view('pages.mesa.edit', ['mesa' => $mesa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mesa $mesa)
    {
        $regras = [
            // 'id' => 'required',
            'numero_cadeiras' => 'required|min:1|max:99',
            'status' => ''
        ];

        $feedback = [
            // 'id.required' => 'A mesa deve ser selecionada',
            'required' => 'O campo :attribute deve ser preenchido',
            'numero_cadeiras.min' => 'Mesa deve ter no mínimo 1 cadeira',
            'numero_cadeiras.max' => 'Mesa deve ter no maximo 99 cadeiras',
        ];
        
        $request->validate($regras, $feedback);
        $mesa->update($request->all());
        return redirect()->route('mesa.index', ['mesa' => $mesa->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mesa $mesa)
    {
        $mesa->delete();
        return redirect()->route('mesa.index');
    }
}
