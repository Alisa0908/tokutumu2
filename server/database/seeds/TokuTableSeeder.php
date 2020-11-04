<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TokuTableSeeder extends Seeder
{
    
    public function run()
    {       
        factory(App\Toku::class,10)->create();   
        
        // DB::table('tokus')->insert([
        //     'deliver' => '交番',
        //     'find' => '八幡平市',
        //     'category' => '読み書き物',
        //     'image_url' => 'storage/toku_img/' . rand(21,23) . '.jpg',
        //     'description' => '黒い筆箱、ペンが入っていた'
        // ]);

        // DB::table('tokus')->insert($param);
    }
}
