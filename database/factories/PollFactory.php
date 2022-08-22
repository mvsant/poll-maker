<?php

namespace Database\Factories;

use App\Models\User;
use Carbon\Carbon;
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
            'start_date' => Carbon::today()->subDays(rand(0, 365)),
            'end_date' => Carbon::today()->addDays(rand(0, 365))->endOfDay(),
            'user_id' => User::factory(User::class),
            'is_open' => fake()->boolean()
        ];
    }
}
