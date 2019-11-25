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

Route::get('/', 'CounterController@index');

Route::get('/increase', ['as' => 'increase.counter', 'uses' => 'CounterController@increase']);
Route::get('/decrease', ['as' => 'decrease.counter', 'uses' => 'CounterController@decrease']);