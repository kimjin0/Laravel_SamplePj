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
    $books = [
        'Herry Potter',
        'Laravel',
        '<script>alert("^^");</script>'
    ];
    return view('welcome', [
        'books'=>$books
    ]);
});
//위 Route:get를 Controller를 이용하여 보자
Route::get('/index', 'HomeController@index');

Route::get("/hello", 'HomeController@hello');

Route::get('/contact','HomeController@contact');

Route::get('/projects','ProjectController@index');

Route::get('/tasks','TaskController@index');

Route::get('/tasks/create','TaskController@create');

Route::post('/tasks', 'TaskController@store');

Route::get('/tasks/{task}', 'TaskController@show');

Route::get('/tasks/{task}/edit', 'TaskController@edit');

Route::put('/tasks/{task}', 'TaskController@update');