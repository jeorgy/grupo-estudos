<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PatrimonioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome'              => $this->faker->name(),
            'numero_patrimonio' => strval($this->faker->randomNumber(9, true)),
            'data_aquisicao'    => $this->faker->date(),
            'categoria'         => $this->faker->randomElement(['Mobiliário', 'Eletrônico', 'Informática']),
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ];
    }
}
