<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Poll>
 */
class PollFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'poll_question' => fake()->text(50),
            'start_date' => fake()->date('Y-m-d', 'now'),
            'end_date' => '2022-12-12',
            'user_id' => User::factory(User::class),
            'is_open' => fake()->boolean()
        ];
    }
}
