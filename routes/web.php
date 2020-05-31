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

Route::get('/about', 'HelloController@about');
Route::get('/service', 'ServiceController@index');//here is the get method
Route::post('/service', 'ServiceController@store');// here form is the post method
Route::get('/customers', 'CustomerController@index');// here we have created a customer method
