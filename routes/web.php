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
Route::get('/admin','AdminController@index')->name('admin')->middleware('auth');

Route::get('dutu/create','DutuController@create')->name('create.dutu')->middleware('auth');
Route::get('/dutu/{id}','DutuController@show')->name('show.dutu')->middleware('auth');
Route::get('dutu/delete/{id}','DutuController@destroy')->name('delete.dutu');
Route::post('dutu/edit/{id}','DutuController@update')->name('update.dutu');
Route::post('dutu/store','DutuController@store')->name('save.dutu');
Route::get('dutu/edit/{id}','DutuController@edit')->name('getupdate.dutu');

//route for attdance
Route::get('attend','AttendanceController@index')->middleware('auth');
Route::get('/attend/create','AttendanceController@create')->name('create.attend')->middleware('auth');
Route::get('/attend/{id}','AttendanceController@show')->name('show.attend')->middleware('auth');
Route::get('attend/delete/{id}','AttendanceController@destroy')->name('delete.attend');
Route::post('attend/edit/{id}','AttendanceController@update')->name('update.attend');
Route::post('attend/store','AttendanceController@store')->name('save.attend');
Route::get('attend/edit/{id}','AttendanceController@edit')->name('getupdate.attend');
Route::get('/gety','AdminController@gety')->name('gety');