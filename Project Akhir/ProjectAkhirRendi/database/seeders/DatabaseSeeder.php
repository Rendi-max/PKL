<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Carbon\Carbon;
use App\Models\Link;
use App\Models\TextNotAllowed;
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
            'name'      => 'Aduhai',
            'password'  => Hash::make('test'),
        ]);
        User::create([
            'email'     => 'test1@gmail.com',
            'name'      => 'Alamak',
            'password'  => Hash::make('test'),
        ]);
        Link::create([
            'id'            => 1,
            'user_id'       => 2,
            'short_link'    => "aduhai",
            'original_link' => "https://github.com/Rendi-max/PKL/tree/main",
            'password'      => base64_encode('alamak'),
        ]);
        Link::create([
            'id'            => 2,
            'user_id'       => 2,
            'short_link'    => "alamak",
            'original_link' => "https://github.com/Rendi-max/PKL/tree/main",
            'expired_at'    => Carbon::now()
        ]);
        Link::create([
            'id'            => 3,
            'user_id'       => 2,
            'short_link'    => "waduh",
            'original_link' => "https://github.com/Rendi-max/PKL/tree/main",
        ]);
        TextNotAllowed::create(['text' => 'timah']);
        TextNotAllowed::create(['text' => 'senku']);
        TextNotAllowed::create(['text' => 'weladalah']);
    }
}
