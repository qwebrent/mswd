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

// Route::get('/', function () {
//     return view('welcome');
// });

//Dashboard
Route::get('admin', 'DashboardController@admin')->name('admin')->middleware('auth');


//PWD Module
Route::get('/pwd', 'PWDController@index')->name('pwd.search')->middleware('auth');
Route::get('/pwd/create', 'PWDController@create')->name('pwd.create')->middleware('auth');
Route::post('/pwd/store', 'PWDController@store')->name('pwd.store')->middleware('auth');
Route::get('/pwd/{id}', 'PWDController@show')->name('pwd.show')->middleware('auth');
// Route::get('/pwd/edit/{id}', 'PWDController@edit')->name('pwd.edit')->middleware('auth');
// Route::put('/pwd/{pwdinfo}', 'PWDController@update')->name('pwd.update')->middleware('auth');
// Route::delete('/pwd/{pwdinfo}', 'PWDController@destroy')->name('pwd.destroy')->middleware('auth');
// Route::get('/pwd/download/{id}', 'PWDController@download')->name('pwd.download')->middleware('auth');



//Auth-Login
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout')->name('logout');
