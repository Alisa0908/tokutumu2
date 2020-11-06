<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TokuTableSeeder extends Seeder
{   
    public function run()
    {       
        factory(App\Toku::class,20)->create();   
    }
}
