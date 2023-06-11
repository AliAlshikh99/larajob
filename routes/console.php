<?php

use App\Models\std;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\Artisan;


/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

//command for make truncate a table
Artisan::command('reset:table', function () {
   $table=$this->ask('What is table name?');
   if(Schema::hasTable($table)){
       if($this->confirm('Are U Sure')){
           DB::table($table)->truncate();
           $this->info('The command was successful!');
       }
    }
    else{
       $this->error('The table is not found');
    
   }
})->purpose('Delete all records in table');