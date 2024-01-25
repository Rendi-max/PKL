<?php

namespace App\Console\Commands;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class Model extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tambah:model {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a model design';

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
      $template ="
    <?php
 
    namespace App\Models;
        
    use Illuminate\Database\Eloquent\Model;
        
    class {$this->argument('name')} extends Model
    {
        // ...
    }
    ";
      $model = fopen('app/Models/'.$this->argument('name').'.php', 'w');
      fwrite($model, preg_replace('/\t/', '', trim($template)));
      fclose($model);
    }
}