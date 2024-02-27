<?php

namespace App\Console\Commands;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class Testing extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tambah:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a database';

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
        $input['name'] = $this->ask("Please input user name");
        $input['email'] = $this->ask('What is the email address?');
        $input['password'] = $this->secret("Please input password");
        $input['hash'] = Hash::make($input['password']);
        DB::table('user')->insert([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => $input['hash']
        ]);
        return $this->info('User has been created!');
    }
}