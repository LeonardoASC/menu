<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\User;
use App\Models\Role;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
        $roles = Role::all();
        return view('pagesadm.usuario.create', ['roles' => $roles]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $regras = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'funcao' => 'required|exists:roles,id',
            'password' => 'required|string|min:3',
        ];

        $feedback = [
            'name.required' => 'O campo Nome Completo é obrigatório.',
            'email.required' => 'O campo Email é obrigatório.',
            'email.email' => 'Digite um email válido.',
            'email.unique' => 'Email ja cadastrado',
            'funcao.required' => 'O campo Função é obrigatório.',
            'funcao.exists' => 'O cargo selecionado não existe.',
            'password.required' => 'O campo Senha é obrigatório.',
            'password.min' => 'A senha deve ter pelo menos 3 caracteres.',
        ];

        $request->validate($regras, $feedback);

        $dados = $request->all();

        // dd($request['funcao']);
        $user = User::create($dados);
        dd($user);
        $user->assignRole($request->funcao);

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
