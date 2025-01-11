<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'short_des' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2, 10, 100), // Random price between 10 and 100
            'stock' => $this->faker->numberBetween(1, 100), // Random quantity between 1 and 100
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
