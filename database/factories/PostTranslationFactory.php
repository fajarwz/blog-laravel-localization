<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostTranslationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'post_id' => null,
            'locale' => $this->faker->randomElement(['id', 'en']),
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(2),
        ];
    }
}
