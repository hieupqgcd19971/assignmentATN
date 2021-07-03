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
// login, register , logout 
Route::get('/','HomeController@login');
Route::get('/login_check','HomeController@login_check');
Route::get('/logout','HomeController@logout');
Route::get('/register_execute','HomeController@register_execute');
Route::get('/register','HomeController@register');

// return page
Route::get('/atnpage','HomeController@getProduct');
Route::get('/category','HomeController@all_product');
Route::get('/edit_product/{product_id}','HomeController@edit_product');
Route::get('/category_hot','HomeController@hotProduct');
Route::get('/category_normal','HomeController@normalProduct');
Route::get('/category_sale','HomeController@saleProduct');


// get user
Route::get('/list_user','HomeController@listUser');

// add,edit,delete product
Route::get('/add','HomeController@add_product');
Route::post('/save_new_product','HomeController@save_new_product');
Route::post('/update_product/{product_id}','HomeController@update_product');
Route::get('/delete_product/{product_id}','HomeController@delete_product');



