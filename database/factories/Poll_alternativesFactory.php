<?php

namespace Database\Factories;

use App\Models\Poll;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Poll_alternatives>
 */
class Poll_alternativesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'alternative' => fake()->text(60),
            'votes' => fake()->numberBetween(0, 40),
            'poll_id' => Poll::factory(Poll::class)
        ];
    }
}
