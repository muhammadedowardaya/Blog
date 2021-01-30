<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'AboutController@index')->name('about');

Route::prefix('posts')->group(function () {
    Route::get('/', 'PostController@index')->name('posts');
    Route::get('create', 'PostController@create')->name('post.create');
    Route::post('store', 'PostController@store')->name('post.store');
    Route::get('{post:slug}', 'PostController@show')->name('post.show');
    Route::delete('{post:id}/destroy', 'PostController@destroy')->name('post.delete');
    Route::patch('{post:slug}/update', 'PostController@update')->name('post.update');
    Route::get('{post:slug}/edit', 'PostController@edit')->name('post.edit');
});
