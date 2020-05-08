<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', 'HomeController@index');
Route::post('/register', 'RegisterController@index');
Route::post('/adding', 'AddController@add')->name('adding');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add', 'AddController@index')->name('add');

Route::get('/show/{id}', 'HomeController@show')->name('show');
