<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function __construct(){
        $this->middleware('permission:editar produto');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $termo = $request->input('termo');
        $roles = Role::query();
        if ($termo) {
            $roles->where('name', 'LIKE', '%' . $termo . '%');
        }
        $roles = $roles->get();
        return view('pagesadm.role.index', ['roles' => $roles,'termo' => $termo ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('pagesadm.role.create',['permissions' => $permissions]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $regras = [
            'name' => 'required|string|max:255',
            'description' => 'required|max:255',

        ];

        $feedback = [
            'name.required' => 'O campo Nome Completo é obrigatório.',
            'description.required' => 'O campo Nome Completo é obrigatório.',
        ];

        $request->validate($regras, $feedback);

        $name = $request->input('name');
        $description = $request->input('description');
        $data = [
            'name' => $name,
            'description' => $description,
            'guard_name' => 'web',
        ];

        $role = Role::create($data);
        foreach ($request['selected_permissions'] as $key => $value) {
            $role->givePermissionTo($value);
        }
        return redirect()->route('role.index', ['role' => $role])->with('success', 'Informações salvas com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return view('pagesadm.role.show', ['role' => $role]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('pagesadm.role.edit', ['role' => $role, 'permissions' => $permissions]);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Role $role)
    {
        $regras = [
            'name' => 'required|string|max:255',
            'description' => 'required|max:255',
            'selected_permissions' => 'required'
        ];

        $feedback = [
            'required' => 'O campo :attribute é obrigatório.',
        ];

        $request->validate($regras, $feedback);
        $role->update($request->all());

        // $role = Role::findOrFail($id);
        if ($role->name === 'admin') {
            return redirect()->back()->with('error', 'Não é possível alterar este perfil');
        }
        $permissions = $role->getAllPermissions()->toArray();

        $values = $request['selected_permissions'];
        while ($var = current($values)) {
            if (array_search(key($values), array_column($permissions, 'id')) === false) {
                $role->givePermissionTo(key($values));
            }
            next($values);
        }

        while ($var = current($permissions)) {
            if (!array_key_exists($var['id'], $values)) {
                $role->revokePermissionTo($var['id']);
            }
            next($permissions);
        }



        return redirect()->route('role.index', ['role' => $role->id]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        if ($role->name === 'Administrador') {
            return redirect()->route('role.index')->with('message', 'Você não pode excluir o papel de administrador.');
        }

        $role->delete();
        return redirect()->route('role.index')->with('success', 'Papel excluído com sucesso.');
    }

    public function addPermissoes(Request $request, $id)
    {
        $role = Role::findOrFail($id);
        $permissoes = $request->get('permissoes');

        foreach ($permissoes as $permissao) {
            $role->givePermissaoTo($permissao);
        }

        $role->save();

        return redirect()->route('role.index')->with('success', 'Permissões adicionadas com sucesso.');
    }

    public function buscar(Request $request)
    {
        $termo = $request->input('termo');
        $roles = Role::where('name', 'LIKE', '%' . $termo . '%')->get();
        return view('roles.busca', compact('usuarios', 'termo'));
    }

}
