<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['description' => 'Administrador do Sistema', 'name' => 'Admin'],
            ['description' => 'adicionar patrimonios', 'name' => 'Cadastrador de Patrimônios'],
            ['description' => 'adicionar e editar patrimonios', 'name' => 'Gerente de Patrimônios'],
            ['description' => 'apenas ver patrimonios', 'name' => 'Visualizador de Patrimônios'],
        ];

        foreach($roles as $role) {
            Role::create([
                'name' => $role['name'],
                'description' => $role['description']
            ]);
        }
    }
}
