<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin 001',
            'username' => 'admin',
            'email' => 'admin@test.com',
        ]);

        \App\Models\Post::factory(10)->create([
            'user_id' => 1
        ]);


    }
}
