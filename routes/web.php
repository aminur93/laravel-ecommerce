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


//Fortend Side.................
Route::get('/','HomeController@index');

Route::get('/product_by_category/{category_id}','HomeController@show_product_by_category');

Route::get('/product_by_manufacture/{manufacture_id}','HomeController@show_product_by_manufacture');

Route::get('/view_product/{product_id}','HomeController@view_product_by_id');

Route::post('/add-to-cart','CartController@add_to_cart');

Route::get('/show-cart','CartController@show_cart');

Route::get('/delete-to-cart/{rowId}','CartController@delete_cart');

Route::post('/update-cart','CartController@update_cart');

Route::get('/login-check','CheckOutController@login_check');

Route::post('/customer-registration','CheckOutController@customer_registration');
    
Route::get('/checkout','CheckOutController@checkout');

Route::post('/save-shipping-details','CheckOutController@save_shipping_details');

Route::get('/payment','CheckOutController@payment');
    
    Route::get('/customer-logout','CheckOutController@customer_logout');
    
    Route::post('/customer-login','CheckOutController@customer_login');
    
    Route::post('/order-place','CheckOutController@order_place');
    
    Route::get('/manage-order','CheckOutController@manage_order');
    
    Route::get('/view-order/{order_id}','CheckOutController@view_order');
    
    Route::get('/delete-order/{order_id}','CheckOutController@delete_order');
    
    Route::get('/unactive-order/{order_id}','CheckOutController@unactive_order');
    
    Route::get('/active-order/{order_id}','CheckOutController@active_order');

//backend side.................
Route::get('/admin-login','AdminController@index');
Route::get('/dashboard','SuperAdminController@index');
Route::post('/admin-dashboard','AdminController@dashboard');
Route::get('/logout','SuperAdminController@logout');

//Category Route
Route::get('/add-category','CategoryController@index');

Route::get('/all-category','CategoryController@all_category');

Route::post('/save-category','CategoryController@save_category');

Route::get('/unactive-category/{category_id}','CategoryController@unactive_category');

Route::get('/active-category/{category_id}','CategoryController@active_category');
    
Route::get('/edit-category/{category_id}','CategoryController@edit_category');

Route::post('/update-category/{category_id}','CategoryController@update_category');
    
Route::get('/delete-category/{category_id}','CategoryController@delete_category');


//Manufacture Route
Route::get('/add-manufacture','ManufactureController@index');

Route::get('/all-manufacture','ManufactureController@all_manufacture');

Route::post('/save-manufacture','ManufactureController@save_manufacture');

Route::get('/unactive-manufacture/{manufacture_id}','ManufactureController@unactive_manufacture');

Route::get('/active-manufacture/{manufacture_id}','ManufactureController@active_manufacture');

Route::get('/edit-manufacture/{manufacture_id}','ManufactureController@edit_manufacture');

Route::post('/update-manufacture/{manufacture_id}','ManufactureController@update_manufacture');

Route::get('/delete-manufacture/{manufacture_id}','ManufactureController@delete_manufacture');

//Products Route List
Route::get('/add-product','ProductController@index');

Route::get('/all-product','ProductController@all_product');

Route::post('/save-product','ProductController@save_product');

Route::get('/unactive-product/{product_id}','ProductController@unactive_product');

Route::get('/active-product/{product_id}','ProductController@active_product');

Route::get('/edit-product/{product_id}','ProductController@edit_product');

Route::post('/update-product/{product_id}','ProductController@update_product');

Route::get('/delete-product/{product_id}','ProductController@delete_product');

//Slider Rute List
Route::get('/add-slider','SliderController@index');

Route::get('/all-slider','SliderController@all_slider');

Route::post('/save-slider','SliderController@save_slider');

Route::get('/unactive-slider/{slider_id}','SliderController@unactive_slider');
    
Route::get('/active-slider/{slider_id}','SliderController@active_slider');

Route::get('/edit-slider/{slider_id}','SliderController@edit_slider');

Route::post('/update-slider/{slider_id}','SliderController@update_slider');

Route::get('/delete-slider/{slider_id}','SliderController@delete_slider');

