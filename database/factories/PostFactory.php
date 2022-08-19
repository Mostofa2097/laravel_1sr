<?php

namespace Database\Factories;

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
    public function definition()
    {
        return [
            'title' => fake()->text(),
            'description' => fake()->sentence(),
            'view_count' => rand(0,100),
            'rating' => rand(1,5),
            'author_id' => rand(1,5),
            'is_published' => true,
        ];
    }
}
