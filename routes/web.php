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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/descripe/{id}', 'OrderController@edit')->middleware('auth')->name('descripe');
Route::get('/notification', 'RealTimeController@index')->middleware('auth')->name('notification');
Route::post('/check-out/prepare', 'CheckOutController@prepare')->middleware('auth')->name('checkout.prepare');
Route::post('/Add-Comment', 'CommentController@store')->middleware('auth')->name('Add.comment');
