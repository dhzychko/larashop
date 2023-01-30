<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(2),
            'sku' => $this->faker->word(),
            'image' => $this->faker->imageUrl(),
            'price_in_cents' => $this->faker->numberBetween(100, 10000),
            'description' => $this->faker->sentence(10),
            'in_stock' => 1,
        ];
    }
}
