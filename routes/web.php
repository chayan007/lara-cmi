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
Route::get('/home', 'HomeController@index')->name('home');

Route::group( ['middleware' => 'auth' ], function()
{
Route::get('/add', 'PostsController@index');
Route::post('/add','PostsController@store');
Route::get('/delete/{id}','PostsController@delete');
});

Route::get('/products','PostsController@display');
Route::get('/products/{id}','PostsController@detail');
Route::post('/contact','PostsController@send');
