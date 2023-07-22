<?php

// database/factories/ProdutoFactory.php

namespace Database\Factories;

use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ProdutoFactory extends Factory
{
    protected $model = Produto::class;

    public function definition(): array
    {
        return [
            'categoria_id' => $this->faker->numberBetween(1, 10), // Substitua 1 e 10 pelos limites desejados para a categoria_id
            'nome' => $this->faker->word,
            'descricao' => $this->faker->sentence,
            'preco' => $this->faker->randomFloat(2, 5, 200),  // Gera um preço aleatório entre 10 e 100 com duas casas decimais
        ];
    }
}
