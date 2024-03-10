<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Link;
use App\Models\User;
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
        User::create([
            'email'     => 'rendi@gmail.com',
            'name'      => 'Rendi Firman Syah',
            'password'  => Hash::make('test'),
            'isAdmin'     => 1
        ]);
        User::create([
            'email'     => 'test@gmail.com',
            'name'      => 'Rendi Firman Syah',
            'password'  => Hash::make('test'),
        ]);
        User::create([
            'email'     => 'test1@gmail.com',
            'name'      => 'Rendi Firman Syah',
            'password'  => Hash::make('test'),
        ]);
        Link::create([
            'short_link'    => "aduhai",
            'original_link'    => "https://github.com/Rendi-max/PKL/tree/main",
        ]);
    }
}
