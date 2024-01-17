<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\testUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        testUser::create([
            'email' => 'user@gmail.com',
            'password' => Hash::make('test'),
            'level' => 1,
        ]);
        testUser::create([
            'email' => 'admin@gmail.com',
            'password' => Hash::make('test'),
            'level' => 2,
        ]);
        testUser::create([
            'email' => 'superAdmin@gmail.com',
            'password' => Hash::make('test'),
            'level' => 3,
        ]);
    }
}
