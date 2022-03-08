<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


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
    /*$data = json_decode($tools, true);
    echo $data[0];  //  paintbrush
    echo $data[1];  //  canvas
    echo $data[2];
    */
    //$data['title']['start']['end'];
    //$data->events;
    //echo $data['events'];
    
    return view('calendar');
});

Route::get('/board', function () {
    return view('board');
});

Route::get('/events-feed', function () {    
    $data = array(
        array(
            'title' => "CSE4500 Class",
            'start' => "2022-02-23T17:30:00",
            'end' => "2022-02-23T18:45:00"
        ),
        array(
            'title' => "CSE4500 Class",
            'start' => "2022-02-28T17:30:00",
            'end' => "2022-02-28T18:45:00"

        )
    );
    
    return json_encode($data);
});

Route::get('/db-test', function(){
   /* try{
        \DB::connection()->getPDO();
        $db_name = \DB::connection()->getDatabaseName();
        echo 'Database Connected: '.$db_name;
    } catch(\Exception $e) {
        echo 'None';
    }
    */
    try {         
        echo \DB::connection()->getDatabaseName();     
   } catch (\Exception $e) {
         echo 'None';
   }
});

Route::get('/db-migrate', function() {
    Artisan::call('migrate');
    echo Artisan::output();
});

Route::resource('/todos', TodoController::class);

Route::fallback(function(){
    return view('fallback');
});

