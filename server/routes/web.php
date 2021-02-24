<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/test', function () {
//     return view('test');
// });

// resourceにより6つはいってしまうが3つじゃなくて4つに変更しか使わなかった
Route::resource('tokus', 'TokuController')->only(['index', 'create', 'store', 'edit']);

// exceptで指定した所以外はログインが必要
Route::group(['middleware' => 'auth'], function () {
    Route::resource('tokus', 'TokuController')->except(['index', 'create', 'store']);
});

Route::get('/thanks', 'FindController@thanks');
Route::get('/', 'FindController@home');
// Route::get('/', function (){
//     return view('welcome');
// });



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
