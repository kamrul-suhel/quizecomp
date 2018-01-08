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

Auth::routes();

Route::get('/', 'QuizController@index')->name('quiz');
Route::post('/', 'QuizController@store')->name('submit');
Route::get('/terms', 'QuizController@terms')->name('terms');
Route::get('/thanks', 'QuizController@thanks')->name('thanks');
Route::get('/home', 'HomeController@index')->name('home');
