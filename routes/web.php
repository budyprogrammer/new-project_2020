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
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/checkout','OrderController');

	Route::get('/', 'ProductController@show')->name('all');
	Route::get('/contact','ProductController@contact')->name('contact');
	Route::post('/sendcontact','ProductController@SendContact')->name('sendcontact');
	
	Route::get('/products', 'ProductController@showProduct')->name('products');
	Route::get('/singlepage/{id}','ProductController@sing_page')->name('singlepage');
	Route::group(['as' => 'products.', 'prefix' => 'products'], function () {
	Route::get('/addToCart/{product}', 'ProductController@addToCart')->name('addToCart');
	
});



Route::group(['as' => 'cart.', 'prefix' => 'cart'], function () {
	Route::get('/', 'ProductController@cart')->name('all');
	Route::post('/remove/{product}', 'ProductController@removeProduct')->name('remove');
	Route::post('/update/{product}', 'ProductController@updateProduct')->name('update');

});

Route::group(['as'=>'admin.', 'middleware' => ['auth','admin'], 'prefix'=>'admin'], function(){
	Route::get('/', 'AdminController@dashboard')->name('dashboard');
	Route::resource('category', 'CategoryController');
	Route::resource('product','ProductController');
	Route::get('view-orders', 'ProductController@viewOrders')->name('view-orders');
	Route::get('orderview/{id}', 'ProductController@order_view')->name('orderview');
	Route::delete('orderdelete/{id}', 'ProductController@orderDelete')->name('orderdelete');

});
