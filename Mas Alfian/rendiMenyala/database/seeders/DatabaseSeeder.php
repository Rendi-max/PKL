<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Masyarakat;
use App\Models\Wilayah;
use App\Models\WilayahMataUang;
use Illuminate\Database\Seeder;

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
        Wilayah::create([
            'negara' => 'indonesia',
            'benua' => 'asia'
        ]);

        WilayahMataUang::create([
            'wilayah_id' => 1,
            "nama_mata_uang" => "Rupiah",
            "uang_ke_dolar" => "15.572",
        ]);

        Masyarakat::create([
            'wilayah_id' => 1,
            'nama'       => 'Faisal',
            'jumlah_uang'=> '10 US$'
        ]);
    }
}
