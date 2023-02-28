<?php

namespace Database\Factories;
use App\Models\author;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */
class postFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author_id'=>author::inRandomOrder()->first()->id,
            'title'=>fake()->text(),
            'discription'=>fake()->slug(),
        ];
    }
}
