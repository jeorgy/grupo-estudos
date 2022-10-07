<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permission_role')->insert([
            'permission_id' => 1,
            'role_id'       => 1,
            'created_at'    => 'now()',
            'updated_at'    => 'now()'
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 2,
            'role_id'       => 1,
            'created_at'    => 'now()',
            'updated_at'    => 'now()'
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 3,
            'role_id'       => 1,
            'created_at'    => 'now()',
            'updated_at'    => 'now()'
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 4,
            'role_id'       => 1,
            'created_at'    => 'now()',
            'updated_at'    => 'now()'
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 1,
            'role_id'       => 2,
            'created_at'    => 'now()',
            'updated_at'    => 'now()'
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 2,
            'role_id'       => 2,
            'created_at'    => 'now()',
            'updated_at'    => 'now()'
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 1,
            'role_id'       => 3,
            'created_at'    => 'now()',
            'updated_at'    => 'now()'
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 2,
            'role_id'       => 3,
            'created_at'    => 'now()',
            'updated_at'    => 'now()'
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 3,
            'role_id'       => 3,
            'created_at'    => 'now()',
            'updated_at'    => 'now()'
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 1,
            'role_id'       => 4,
            'created_at'    => 'now()',
            'updated_at'    => 'now()'
        ]);

        User::create([
            'name' => 'Admin',
            'matricula' => '000000',
            'password'  =>  Hash::make('123456'),
            'email' =>  'admin@grupo-estudos.com',
            'role_id' => 1
        ]);

        User::create([
            'name' => 'Cria Patrimônios',
            'matricula' => '111111',
            'password'  =>  Hash::make('123456'),
            'email' =>  'cria-patrimonios@grupo-estudos.com',
            'role_id' => 2
        ]);

        User::create([
            'name' => 'Edita Patrimônios',
            'matricula' => '222222',
            'password'  =>  Hash::make('123456'),
            'email' =>  'edita-patrimonios@grupo-estudos.com',
            'role_id' => 3
        ]);

        User::create([
            'name' => 'Apenas Ver Patrimônios',
            'matricula' => '333333',
            'password'  =>  Hash::make('123456'),
            'email' =>  'var-patrimonios@grupo-estudos.com',
            'role_id' => 4
        ]);
    }
}
