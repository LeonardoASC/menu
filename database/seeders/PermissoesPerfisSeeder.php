<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class PermissoesPerfisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Criando cargo
        $administrador  = Role::create(['name' => 'Administrador', 'guard_name' => 'admin', 'description' => 'Acesso Completo!']);
        $gerente  =       Role::create(['name' => 'Gerente', 'guard_name' => 'admin', 'description' => 'Acesso parcial do sistema!']);
        $garcom  =        Role::create(['name' => 'Garcom', 'guard_name' => 'admin', 'description' => 'Acesso mininmo do sistema!']);

        $permissoes = collect([
            ['guard_name'=>'admin','name'=>'listar produtos', 'category' => 'produto', 'description' => 'Permite visualizar a listagem de produtos e executar outras permissões de produto'],
            ['guard_name'=>'admin','name'=>'cadastrar produto', 'category' => 'produto', 'description' => 'Permite cadastrar um novo cliente'],
            ['guard_name'=>'admin','name'=>'visualizar produto', 'category' => 'produto', 'description' => 'Permite visualizar os dados de cliente'],
            ['guard_name'=>'admin','name'=>'editar produto', 'category' => 'produto', 'description' => 'Permite editar os dados de produto'],
            ['guard_name'=>'admin','name'=>'desativar produto', 'category' => 'produto', 'description' => 'Permite desativar e reativar um cliente'],

            // ['guard_name'=>'geren','name'=>'desativar produto', 'category' => 'produto', 'description' => 'Permite desativar e reativar um cliente'],
            // ['guard_name'=>'garc','name'=>'desativar produto', 'category' => 'produto', 'description' => 'Permite desativar e reativar um cliente'],


        ]);
        $permissoes->each(function ($item) use ($administrador) {
            $permission = Permission::create($item);
            $permission->syncRoles([$administrador]);
        });

        $admin = User::create([
            'name'=>'adm',
            'email'=>'adm@adm.com',
            'password'=>bcrypt('123'),
        ]);

        $admin->assignRole($administrador);

    }
}
