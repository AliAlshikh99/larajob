<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=>1,
            'title' =>fake()->text(),
            'tags' => 'laravel, api, backend',
            'company' => fake()->company(),
            'website' => fake()->url(),
            'location' => fake()->address(),
            'experience'=>1,
            'description' => 'babababbababbab',
        ];
    }
}
