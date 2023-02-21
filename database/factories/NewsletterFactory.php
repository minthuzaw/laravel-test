<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsletterFactory extends Factory
{
    public function definition(): array
    {
        $users = User::all();
        foreach ($users as $user) {
            return [
                'user_id' => $user->id,
                'subject' => fake()->word(),
                'email_text' => fake()->sentence(),
                'send_time' => now(),
            ];
        }

        return [];
    }
}
