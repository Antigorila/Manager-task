<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equipment>
 */
class EquipmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        $producers = ['Lenovo', 'Samsung', 'Apple', 'Dell', 'HP', 'LG', 'Asus', 'Acer', 'Lenovo']; 
        return [
            'producer' => fake()->randomElement($producers),
            'serial_number' => fake()->unique()->numberBetween(10000 - 99999),
            'model_name' => fake()->word(),
            'model_number' => fake()->unique()->numberBetween(0 - 50),
            'error' => fake()->sentences(3, true),
        ];
    }
}
