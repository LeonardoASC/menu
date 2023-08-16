<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateCargoRequest;
use Illuminate\Support\Facades\DB;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return view('pagesadm.cargo.index', ['roles' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('pagesadm.cargo.create',['permissions' => $permissions]);
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
        Role::create($data);
        return redirect()->route('administrativa.index')->with('success', 'Informações salvas com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cargo $cargo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cargo $cargo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCargoRequest $request, Cargo $cargo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cargo $cargo)
    {
        //
    }
}
