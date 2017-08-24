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

Route::get('/vn', function () {
    return view('vn-welcome');
})->name('home');

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');

Route::get('/sign-out', 'SessionsController@destroy');

Route::get('/sign-in', 'SessionsController@create');

Route::post('/sign-in', 'SessionsController@store');

Route::get('/profile/dash-board', function() {
	return view('welcome');
});

Route::get('/documents', function() {
	return view('document.document');
});

Route::get('/forum', 'ThreadController@show')->name('forum');

Route::get('/forum/threads/create', 'ThreadController@create');

Route::post('/forum/threads/create', 'ThreadController@store');

Route::get('/forum/threads/{thread}', 'ThreadController@index');

Route::post('/forum/threads/{thread}/comment', 'CommentController@store');