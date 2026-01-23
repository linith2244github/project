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
            "product_name" => $this->faker->text(50),
            "quantity" => $this->faker->numberBetween(5, 10),
            "price" => $this->faker->numberBetween(200, 1000),
            "description" => $this->faker->text(150),
            "created_at" => now(),
            "updated_at"=> now(),
        ];
    }
}
