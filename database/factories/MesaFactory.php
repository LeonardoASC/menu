<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Mesa;
use Faker\Generator as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mesa>
 */
class MesaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
     protected $model = Mesa::class;
    public function definition(): array
    {
        return [
            'numero_cadeiras' => $this->faker->numberBetween(1, 10),
            'status' => $this->faker->randomElement(['disponivel', 'ocupada', 'reservada']),
        ];
    }
}
