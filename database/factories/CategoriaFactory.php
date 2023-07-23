<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class CategoriaFactory extends Factory
{
    protected $model = Categoria::class;
    protected static $categoriasEmbaralhadas;

    public function definition(): array
    {
        if (!isset(static::$categoriasEmbaralhadas)) {
            $categoriasComida = ['Pratos Principais', 'Sobremesas', 'Aperitivos', 'Saladas', 'Sanduíches'];
            $categoriasBebida = ['Refrigerantes', 'Sucos', 'Cervejas', 'Vinhos', 'Cocktails'];

            $categorias = array_merge($categoriasComida, $categoriasBebida);
            shuffle($categorias);

            static::$categoriasEmbaralhadas = $categorias;
        }

        $nome = array_shift(static::$categoriasEmbaralhadas);

        return [
            'nome' => $nome,
        ];
    }
}
