<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        User::create([
            "username" => "Rendi",
            "email" => "rendi@gmail.com",
            "password" => Hash::make("alamak"),
            "password_salt" => base64_encode(random_int(1000,9000)."alamak")
        ]);
    }
}
