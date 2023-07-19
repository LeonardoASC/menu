<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {   
        $regras = [
            'nome' => 'required|min:3|max:40',
            'cpf' => 'required|digits:11'
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido.',
            'nome.min' => 'O campo nome deve ter no mínimo 3 caracteres.',
            'nome.max' => 'O campo nome deve ter no máximo 40 caracteres.',
            'cpf.required' => 'O campo CPF deve ser preenchido.',
            'cpf.digits' => 'O campo CPF deve ter exatamente 11 dígitos.'
        ];

        $request->validate($regras, $feedback);

        $cpf = $request->input('cpf');

        // Verificar se o CPF já existe no banco de dados
        $clienteExistente = Cliente::where('cpf', $cpf)->first();

        if ($clienteExistente) {
            // CPF já existe, usar o cliente existente
            $cliente = $clienteExistente;
        } else {
            // CPF não existe, criar um novo cliente
            $cliente = new Cliente();
            $cliente->cpf = $cpf;
        }

        // Definir os outros atributos do cliente
        $cliente->nome = $request->input('nome');

        // Salvar o cliente no banco de dados
        $cliente->save();

        // Armazenar na sessão
        session(['nome' => $cliente->nome, 'cpf' => $cliente->cpf]);

        return redirect()->route('cardapio.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClienteRequest $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
