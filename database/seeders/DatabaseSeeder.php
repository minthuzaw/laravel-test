<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\CovidCase;
use App\Models\Newsletter;
use App\Models\Recipient;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        CovidCase::factory(10)->create();
        $this->command->warn('  Creating users, newsletters and recipients');

        User::factory(10)->create();
        Newsletter::factory(10)->create();
        Recipient::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
