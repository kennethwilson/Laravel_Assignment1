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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function()
{
  return view('hello');
});

Route::get('/form', function()
{
  return view('form');
});

Route::post('/register', "UserControl@register");
Route::get('/all',"UserControl@all");
Route::get('/update/{id}',"UserControl@update");
Route::get('/user/{id}',"UserControl@find");
Route::get('/delete/{id}',"UserControl@delete");
Route::post('/updaterecord/{id}',"UserControl@updaterecord");
