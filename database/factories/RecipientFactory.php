<?php

namespace Database\Factories;

use App\Models\Newsletter;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecipientFactory extends Factory
{
    public function definition(): array
    {
        $newsletters = Newsletter::all();
        $users = User::all();
        foreach ($users as $user) {
            foreach ($newsletters as $newsletter) {
                return [
                    'newsletter_id' => $newsletter->id,
                    'email' => $user->email,
                ];
            }
        }

        return [];
    }
}
