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
Route::get('/customers/create', 'CustomerController@create');// here we have created a customer method
Route::post('/customers', 'CustomerController@store');
Route::get('/customers/{customer}', 'CustomerController@show');// this is a dynamic routing
Route::get('/customers/{customer}/edit', 'CustomerController@edit');// this is a dynamic routing
Route::patch('/customers/{customer}', 'CustomerController@update');
