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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/todos', function () {
    return view('todos');
});

Route::get('/calendar', function () {
    $jsonString = file_get_contents(base_path('my_data.json'));

    $data = json_decode($jsonString, true);
    //$data['title']['start']['end'];
    $data->info->title;
    return view('calendar');
});

Route::get('/board', function () {
    return view('board');
});

Route::fallback(function(){
    return view('fallback');
});
