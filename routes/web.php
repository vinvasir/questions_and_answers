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

Route::get('/', 'QuestionController@index');
Route::get('/questions', 'QuestionController@index');

Route::post('/questions', 'QuestionController@store');

Route::get('/questions/{question}', 'QuestionController@show');

Route::post('/questions/{question}/answers', 'AnswerController@store');
