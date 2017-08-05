<?php

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

use App\Task;

Route::get('/', function () {
    return view('welcome');
});




Route::get('test', 'TaskController@index');

Route::get('test/{task}', 'TaskController@showTask');

Route::get('coming-soon', function() {

	return view('progress.coming-soon');

});