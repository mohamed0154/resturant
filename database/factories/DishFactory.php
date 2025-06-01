<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DishFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(2),
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'category_id' => '6',
            'description' =>$this->faker->text(50),
            'image' => '68397d63c4700.jpg',
        ];
    }
}
