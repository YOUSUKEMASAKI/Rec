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

Route::get('/hello','App\Http\Controllers\HelloController@top');


Route::get('/post','App\Http\Controllers\PostController@index')->middleware('auth');

Route::get('post/add','App\Http\Controllers\PostController@add')->middleware('auth');
Route::post('post/add','App\Http\Controllers\PostController@create');

Route::get('post/edit','App\Http\Controllers\PostController@edit')->middleware('auth');
Route::post('post/edit','App\Http\Controllers\PostController@update');

Route::post('/post/delete/{id}','App\Http\Controllers\PostController@delete');

//ログイン
Route::get('/hello/auth','App\Http\Controllers\HelloController@getAuth');
Route::post('/hello/auth','App\Http\Controllers\HelloController@postAuth');

//ログアウト
Route::get('/logout/user', 'App\Http\Controllers\PostController@logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
