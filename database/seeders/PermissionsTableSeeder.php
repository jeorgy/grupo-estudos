<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            ['slug' => 'ver_patrimonios', 'name' => 'Patrimônios [ver]'],
            ['slug' => 'adicionar_patrimonios', 'name' => 'Patrimônios [adicionar]'],
            ['slug' => 'editar_patrimonios', 'name' => 'Patrimônios [editar]'],
            ['slug' => 'deletar_patrimonios', 'name' => 'Patrimônios [apagar]'],
        ];

        foreach($permissions as $permission) {
            Permission::create([
                'name' => $permission['name'],
                'slug' => $permission['slug']
            ]);
        }
    }
}
