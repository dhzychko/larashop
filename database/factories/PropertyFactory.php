<?php

namespace Database\Factories;

use App\Models\Property;
use App\Models\Neighbourhood;
use App\Models\Realtor;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    protected $model = Property::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $realtor_id = Realtor::get()->random()->id;
        $neighbourhood_id = Neighbourhood::get()->random()->id;
        return [
            'name' => $this->faker->words(2, true),
            'type' => $this->faker->randomElement(['H','h', 'C','c', 'A','a']),
            'address' => $this->faker->address(),
            'square' => $this->faker->numberBetween(20, 2000),
            'realtor_id' => $realtor_id,
            'neighborhood_id' => $neighbourhood_id,
        ];
    }
}
