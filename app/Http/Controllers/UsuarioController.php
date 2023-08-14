<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\User;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = User::all();
        return view('pagesadm.usuario.index',['usuarios' => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pagesadm.usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $regras = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            // 'funcao' => 'required|string',
            'password' => 'required|string|min:3',
        ];

        $feedback = [
            'name.required' => 'O campo Nome Completo é obrigatório.',
            'email.required' => 'O campo Email é obrigatório.',
            'email.email' => 'Digite um email válido.',
            'email.unique' => 'Email ja cadastrado',
            // 'funcao.required' => 'O campo Função é obrigatório.',
            'password.required' => 'O campo Senha é obrigatório.',
            'password.min' => 'A senha deve ter pelo menos 3 caracteres.',
        ];

        $request->validate($regras, $feedback);
        $dados = $request->all();
        // dd($dados);
        User::create($dados);
        return redirect()->route('administrativa.index')->with('success', 'Informações salvas com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUsuarioRequest $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
