<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
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
        $title = fake()->sentence;
        $slug = str_slug($title, '-');

        return [
            'user_id' => fake()->randomElement([1, 5]),
            'slug' => $slug,
            'title' => $title,
            'description' => fake()->sentence(),
            'full_description' => fake()->text(),
            'is_published' => fake()->boolean(),
        ];
    }
}
