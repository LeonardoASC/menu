<?php

namespace App\Http\Controllers;

use App\Models\Honorario;
use App\Http\Requests\StoreHonorarioRequest;
use App\Http\Requests\UpdateHonorarioRequest;
use Illuminate\Http\Request;

class HonorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $honorarios = Honorario::all();
        return view('pagesadm.honorario.index', ['honorarios'=> $honorarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pagesadm.honorario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $regras = [
            'preco_cover' => 'required|min:1|max:99',
            'porcentagem_garcom' => 'required|min:1|max:99',
            'taxa_reserva' => 'required|min:1|max:99',
            'taxa_cortesia' => 'required|min:1|max:99',
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'min' => ':atribute deve ter no mínimo 1 cadeira',
            'max' => ':atribute deve ter no maximo 99 cadeiras',
        ];

        $request->validate($regras, $feedback);

        Honorario::create($request->all());
        return redirect()->route('honorario.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Honorario $honorario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Honorario $honorario)
    {


        return view('pagesadm.honorario.edit', ['honorario' => $honorario]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Honorario $honorario)
    {
        $regras = [
            'preco_cover' => 'required|numeric|min:0',
            'porcentagem_garcom' => 'required|numeric|min:0|max:100',
            'taxa_reserva' => 'required|numeric|min:0',
            'taxa_cortesia' => 'required|numeric|min:0',
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'numeric' => 'O campo :attribute deve ser um número',
            'min' => 'O campo :attribute deve ser maior ou igual a :min',
            'max' => 'O campo :attribute deve ser menor ou igual a :max',
        ];

        $request->validate($regras, $feedback);

        $honorario->update($request->all());
        return redirect()->route('honorario.index', ['honorario' => $honorario->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Honorario $honorario)
    {
        if ($honorario->id == 1) {
            return redirect()->route('honorario.index')->with('message', 'Você não pode excluir os honorarios do sistema! SUJEITO A ERRO.');
        }
    }
}
