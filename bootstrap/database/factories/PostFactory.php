<?php

namespace bootstrap\database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(rand(5, 10), true),
            'content' => $this->faker->sentences(5, true),
            'image' => 'https://via.placeholder.com/1000'
        ];
    }
}
