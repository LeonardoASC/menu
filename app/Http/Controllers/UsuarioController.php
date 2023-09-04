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
    public function index(Request $request)
    {
        $termo = $request->input('termo');
        $usuarios = User::query();
        if ($termo) {
            $usuarios->where('name', 'LIKE', '%' . $termo . '%');
        }
        $usuarios = $usuarios->get();
        return view('pagesadm.usuario.index',['usuarios' => $usuarios,'termo' => $termo ]);
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
        // dd($user);
        $user->assignRole($request->funcao);

        return redirect()->route('usuario.index')->with('success', 'Informações salvas com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $usuario)
    {
        return view('pagesadm.usuario.show', ['usuario' => $usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, User $usuario)
    {
        return view('pagesadm.usuario.edit', ['usuario' => $usuario]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $usuario)
    {
        $regras = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$usuario->id,
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

        $usuario->update($request->all());
        return redirect()->route('usuario.index', ['usuario' => $usuario->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $usuario)
    {
        if ($usuario->name === 'adm') {
            return redirect()->route('usuario.index')->with('message', 'Você não pode excluir o administrador master.');
        }

        $usuario->delete();
        return redirect()->route('usuario.index')->with('success', 'Papel excluído com sucesso.');
    }

    public function buscar(Request $request)
    {
        $termo = $request->input('termo');
        $usuarios = Usuario::where('name', 'LIKE', '%' . $termo . '%')->get();
        return view('usuarios.busca', compact('usuarios', 'termo'));
    }
}
