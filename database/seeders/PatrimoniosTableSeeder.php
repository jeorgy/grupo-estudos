<?php

namespace Database\Seeders;

use App\Models\Patrimonio;
use Illuminate\Database\Seeder;

class PatrimoniosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Patrimonio::factory()
                ->count(50)
                ->create();
    }
}
