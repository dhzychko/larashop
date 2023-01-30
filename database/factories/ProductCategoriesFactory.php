<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Category;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductCategoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $category_ids = Category::all()->pluck('id');
        $product_ids = Product::all()->pluck('id');
        return [
            'categories_id' => $this->faker->randomElement($category_ids),
            'products_id'   => $this->faker->randomElement($product_ids)
        ];
    }
}
