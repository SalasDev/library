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

Route::view('/', 'welcome')->name('homepage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/book', 'BookController');

Route::get('user/{user}', 'UserController@show')->name('user.show');
Route::get('user/{user}/edit', 'UserController@edit')->name('user.edit');
Route::put('user/{user}', 'UserController@update')->name('user.update');
Route::get('book/{book}/chapter/create', 'ChapterController@create')->name('chapter.create');
Route::post('book/{book}/chapter', 'ChapterController@store')->name('chapter.store');
Route::get('book/{book}/chapter/{chapter}', 'ChapterController@show')->name('chapter.show');
Route::get('book/{book}/chapter/{chapter}/edit', 'ChapterController@edit')->name('chapter.edit');
Route::put('book/{book}/chapter/{chapter}', 'ChapterController@update')->name('chapter.update');
Route::delete('book/{book}/chapter/{chapter}', 'ChapterController@destroy')->name('chapter.destroy');
