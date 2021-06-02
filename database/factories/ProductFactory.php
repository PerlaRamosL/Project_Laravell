<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => "Computadoras {$this->faker->word}",
            'price' => 200,
            'description' => $this->faker->text($maxNbChars = 200),
            'thumbnail' => 'img'.$this->faker->image("public/storage/img",640,840,null,false)
        ];
    }
}
