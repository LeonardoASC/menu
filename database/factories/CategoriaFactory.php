<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class CategoriaFactory extends Factory
{
    protected $model = Categoria::class;

    public function definition(): array
    {
        $categoriasComida = ['Pratos Principais', 'Sobremesas', 'Aperitivos', 'Saladas', 'Sanduíches'];
        $categoriasBebida = ['Refrigerantes', 'Sucos', 'Cervejas', 'Vinhos', 'Cocktails'];

        $categorias = $this->faker->boolean ? $categoriasComida : $categoriasBebida;
        $nome = $this->faker->randomElement($categorias);

        return [
            'nome' => $nome,
        ];
    }
}
