<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TokuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'category' => '貴重品',
            'find'=>'八幡平',
            'deliver'=>'なかやま荘',
            'image_url'=>'https://ptl.imagegateway.net/contents/original/phototech/sense-up/img/01/02_pic01.jpg'

        ];
    }
}
