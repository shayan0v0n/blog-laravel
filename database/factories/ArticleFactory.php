<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title" => fake()->text(),
            "user_id" => rand(1, 15),
            "slug" => fake()->slug(),
            "description" => fake()->text(),
            "content" => fake()->paragraph()
        ];
    }
}
