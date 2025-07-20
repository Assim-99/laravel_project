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
    public function definition(): array
    {
        return [
            'title' => $this->faker->word(3),
            'price' => $this->faker->randomFloat(2, 50, 1000),
            'quantity' => $this->faker->numberBetween(1, 100), // الكمية
            'image' => 'https://placehold.co/600x400/png',
            'description' => $this->faker->paragraph(), // وصف
        ];
    }
}
