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

// Route::get('/', 'PagesController@home_page');

// Route::get('users/{id}', function ($id) {
//     return view('index');
// });

// Route::get('/about', 'PagesController@about');

// Route::get('/services', 'PagesController@services');

// Route::get('services/{name}/{id}', function ($name, $id) {
//     return '<h2>My name is ' . $name . ' and My Id is '. $id. '</h2>';
// });

use Whoops\Run;

Route::get('/', 'ClientController@index');
Route::get('/shop', 'ClientController@shop');
Route::get('/cart', 'ClientController@cart');
Route::get('/checkout','ClientController@checkout');

Route::get('/admin', 'AdminController@dashboard');
Route::get('/addcategory', 'AdminController@addCategory');
Route::get('/addproduct', 'AdminController@addProduct');
Route::get('/addslider', 'AdminController@addSlider');
Route::get('/categories', 'AdminController@listCategories');
Route::get('/products', 'AdminController@listProducts');
Route::get('/sliders', 'AdminController@listSliders');
