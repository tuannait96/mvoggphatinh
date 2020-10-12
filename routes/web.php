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
Route::get('attdance','AttendanceController@index');
Route::get('/attdance/create','AttendanceController@create')->name('create.attdance')->middleware('auth');
Route::get('/attdance/{id}','AttendanceController@show')->name('show.attdance')->middleware('auth');
Route::get('attdance/delete/{id}','AttendanceController@destroy')->name('delete.attdance');
Route::post('attdance/edit/{id}','AttendanceController@update')->name('update.attdance');
Route::post('attdance/store','AttendanceController@store')->name('save.attdance');
Route::get('attdance/edit/{id}','AttendanceController@edit')->name('getupdate.attdance');

Route::get('attend', function () {
    return view('user.attend');
});