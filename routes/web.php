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

Route::get('/','HomeController@login');

Route::get('/atnpage','HomeController@getProduct');
Route::get('/login_check','HomeController@login_check');
Route::get('/category','HomeController@all_product');

Route::get('/add','HomeController@add_product');

Route::post('/save_new_product','HomeController@save_new_product');
Route::get('/edit_product/{product_id}','HomeController@edit_product');
Route::post('/update_product/{product_id}','HomeController@update_product');
Route::get('/delete_product/{product_id}','HomeController@delete_product');
