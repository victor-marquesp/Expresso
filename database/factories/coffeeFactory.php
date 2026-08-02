<?php

namespace Database\Factories;

use App\Models\Coffee;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Enums\Size;
use App\Enums\Heat;

/**
 * @extends Factory<Coffee>
 */
class coffeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $sample_pics = [
            'coffees/sample/arabic_coffee.jpg',
            'coffees/sample/bicerin.jpg',
           'coffees/sample/bosanska_kahva.jpg',
            'coffees/sample/cafe_de_olla.jpg',
            'coffees/sample/caffe_latte.jpg',
            'coffees/sample/caffe_mocha.jpg',
           'coffees/sample/capuccino.jpg',
           'coffees/sample/ca_phe_trung.jpg',
           'coffees/sample/cortado.jpg',
            'coffees/sample/cuban_coffee.jpg',
           'coffees/sample/eiskaffee.jpg',
            'coffees/sample/expresso.jpg',
            'coffees/sample/flat_white.jpg',
            'coffees/sample/frappe_coffee.jpg',
            'coffees/sample/freddo_capuccino.jpg',
            'coffees/sample/freddo_expresso.jpg',
            'coffees/sample/galao.jpg',
            'coffees/sample/ghauwa.jpg',
            'coffees/sample/irish_coffee.jpg',
            'coffees/sample/macchiato.jpg',
            'coffees/sample/marocchino.jpg',
            'coffees/sample/ristretto.jpg',
            'coffees/sample/shakerato.jpg',
            'coffees/sample/turk_kahvesi.jpg',
            'coffees/sample/vietnamese_coffee.jpg',
            'coffees/sample/vietnamese_iced.jpg'

        ];

        return [
            'name' => fake()->word(),
            'description' => fake()->optional(0.8)->realText(20),
            'picture_path' => fake()->randomElement($sample_pics),
            'price' => fake()->numberBetween(0, 100),
            'size' => fake()->randomElement(Size::cases()),
            'heat' => fake()->randomElement(Heat::cases()),
            'volume_ml' => fake()->numberBetween(10, 1000)
        ];
    }
}
