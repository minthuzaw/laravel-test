<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CovidCaseFactory extends Factory
{
    public function definition()
    {
        return [
            'report_date' => fake()->date(),
            'cases' => fake()->randomNumber(4),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
