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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/index', 'HomeController@index');

Route::get('/student/{slug}', 'StudentController@show');

Route::get('/students/index', 'StudentController@index');

Route::post('/student/{slug}', 'StudentController@store');