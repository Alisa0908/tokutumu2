<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Toku;
use Faker\Generator as Faker;

$factory->define(Toku::class, function (Faker $faker) {

    $category = [
        '読み書き系','貴重品','読み書き物','身につけるもの','電子機器','その他'
    ];
    $deliver = [
        '交番','駅','コンビニ'
    ];
    $find = [
        '八幡平市','浦安市','盛岡市','鹿児島市'
    ];

    return [
        'deliver' => $deliver[array_rand($deliver)],
        'find' => $find[array_rand($find)],
        'category' => $category[array_rand($category)],
        'image_url' => 'storage/toku_img2/img' . rand(21,35) . '.jpg',
        'description' => '黒い筆箱、ペンが入っていた'
    ];
});
    
    
