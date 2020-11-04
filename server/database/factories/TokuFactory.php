<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Toku;
use Faker\Generator as Faker;

$factory->define(Toku::class, function (Faker $faker) {

    $category = [
        '読み書き系','貴重品','読み書き物','身につけるもの','電子機器','その他'
    ];

    return [
        'deliver' => '交番',
        'find' => '八幡平市',
        'category' => $category[array_rand($category)],
        'image_url' => 'storage/toku_img/' . rand(21,23) . '.jpg',
        'description' => '黒い筆箱、ペンが入っていた'
    ];
});
    
    
