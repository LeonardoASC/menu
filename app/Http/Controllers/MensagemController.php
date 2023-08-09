<?php

namespace App\Http\Controllers;

use App\Models\Mensagem;
use App\Http\Requests\StoreMensagemRequest;
use App\Http\Requests\UpdateMensagemRequest;

class MensagemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pagesadm.mensagem.index');
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
    public function store(StoreMensagemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Mensagem $mensagem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mensagem $mensagem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMensagemRequest $request, Mensagem $mensagem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mensagem $mensagem)
    {
        //
    }
}
