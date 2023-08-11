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
        $imageUrls = [
            'https://media.istockphoto.com/id/1165399909/pt/foto/delicious-meal-on-a-black-plate-top-view-copy-space.jpg?s=2048x2048&w=is&k=20&c=056eP-nle22vwRtxSrAF5Ne9BPtj_iiAUJxHckfpcuU=',
            'https://media.istockphoto.com/id/1150368715/pt/foto/duck-leg-confit.jpg?s=2048x2048&w=is&k=20&c=L3e37Iewdln93FFZO-mDLw7gNYppgII0WFFNvM4Oxc0=',
            'https://media.istockphoto.com/id/854328926/pt/foto/roasted-goose-liver-with-date-fruit-and-apple.jpg?s=2048x2048&w=is&k=20&c=I0tvknEpY9UyNsL9Ok176KetEvNzyf6SfxZ6POn0KLk=',
            'https://media.istockphoto.com/id/1200799871/pt/foto/grilled-salmon-with-sauteed-vegetables.jpg?s=2048x2048&w=is&k=20&c=Y1M8rz5dTBnOp2UpGxNbdxn-6PH4N3Yduo6TyubERJ8=',
            'https://www.istockphoto.com/br/foto/delicioso-aperitivo-sobre-prato-branco-gm494581066-77523039?phrase=plate%2Bof%2Bfood',
            'https://media.istockphoto.com/id/494581066/pt/foto/delicioso-em-chapa-branca-aperitivos.jpg?s=2048x2048&w=is&k=20&c=Dk0AQgdJo0VZ1YGq-vjlAg28bALxA7YWMd7jXRf8roE=',
            'https://media.istockphoto.com/id/1007235250/pt/foto/pasta-allarrabbiata-a-traditional-italian-dish-with-parmesan-cheese-and-red-wine-on-a-rustic.jpg?s=2048x2048&w=is&k=20&c=Stejx-_HgWB58AnJjMuS500mWL9p3cckPthTvVgs8rg=',
            'https://media.istockphoto.com/id/1174658745/pt/foto/pasta-penne-with-roasted-tomato-sauce-mozzarella-cheese-top-view-wooden-background.jpg?s=2048x2048&w=is&k=20&c=W4N_sAq2nL2o26Y5uZAHEfKeMPz3fKpGrHS6ELe30qQ=',
            'https://media.istockphoto.com/id/507547728/pt/foto/costeleta-com-ovo-frito-interior-servido-no-prato-foco-diferencial.jpg?s=2048x2048&w=is&k=20&c=gM_PlzwpX8BBgRppRLkYlplJqKNd3o6S9AZvzRd_eoY=',
            'https://media.istockphoto.com/id/629248614/pt/foto/dish-with-meat-steak-on-toast-potato-chips-melted-cheese.jpg?s=2048x2048&w=is&k=20&c=OtQCnntmOtKZgqo2ILS-3DTdL-N4s_iFIJpxJkR6rzY=',
        ];
        return [
            'categoria_id' => $this->faker->numberBetween(1, 10), // Substitua 1 e 10 pelos limites desejados para a categoria_id
            'nome' => $this->faker->word,
            'descricao' => $this->faker->sentence,
            'preco' => $this->faker->randomFloat(2, 5, 200),  // Gera um preço aleatório entre 10 e 100 com duas casas decimais
            'imagem' => $this->faker->randomElement($imageUrls),
        ];
    }
}
