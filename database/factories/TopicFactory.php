<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\Topic;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Topic>
 */
class TopicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => (string) Str::ulid(),
            // 'name' => fake()->unique()->word(),
            'name' => Str::limit(fake()->unique()->word(), 16, ''),
            'description' => fake()->sentence(),
            'available' => fake()->boolean(),
        ];
    }
}
