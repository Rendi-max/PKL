<?php

namespace App\Console\Commands;

use App\Models\Pemuda as ModelsPemuda;
use App\Models\Wilayah;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class Pemuda extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:pemuda {number}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a random data';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {    
       $faker = Faker::create();
       $kodeWilayah = Wilayah::all();
       for($i = 1 ; $i <= $this->argument('number'); $i++){
        $wilayahID = $kodeWilayah[rand(0,sizeof($kodeWilayah)-1)];
           $data = [
                'nama' => 'dummy '.$faker->name(),
                'wilayah_id' => $wilayahID->kode,
                'alamat' => $faker->address(),
                'nomor_telepon' => $faker->phoneNumber(),
                'email' => $faker->email(),
                'status' => random_int(1,2),
                'tanggal_bergabung' => $faker->dateTimeBetween('-4 year'),
           ];
           ModelsPemuda::create($data);
       }
    }
}