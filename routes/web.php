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
    //$tools = file_get_contents(base_path('my_data.json'));
    $jsonString = file_get_contents(base_path('my_data.json'));

    $data = json_encode($jsonString);
    /*$data = json_decode($tools, true);
    echo $data[0];  //  paintbrush
    echo $data[1];  //  canvas
    echo $data[2];
    */
    //$data['title']['start']['end'];
    //$data->events;
    //echo $data['events'];
    echo $data;
  

    return view('calendar');
});

Route::get('/board', function () {
    return view('board');
});

Route::fallback(function(){
    return view('fallback');
});
