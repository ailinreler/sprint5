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

Route::get('/home', 'HomeController@index');

Route::get('/', 'indexController@index')->name('home');

Route::get('/register', 'indexController@goToRegister');

Route::get( '/login' , 'indexController@goToLogin');

Route::get('/faq', 'indexController@goToFaq');

Route::get('/contacto', 'indexController@goToContact');

Route::get('/anadirproducto', 'productController@create')->middleware('admin:2');

Route::get('/products', 'productController@index');

Route::post('/newProduct', 'productController@store');

Route::get('/deleteProduct', 'productController@delete')->middleware('admin:2');

Route::delete('/destroy', 'productController@destroy');

Route::get('/edit', 'productController@goToEdit');

Route::patch('/editProduct/{producto}', 'productController@update');

Route::get('/nuevaCategoria', 'categoryController@index');

Route::post('/addCategory', 'categoryController@store');

Route::post('/filtro', 'productController@filter');



Route::prefix('test')->group(function() {
  Route::get('/products', 'TestController@products');
});
