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
use App\Http\Middleware\CheckAge;
Route::get('/', 'HomeController@index')->name('home');

Auth::routes();
Route::get('/guest', 'GuestController@guest')->name('guest');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post','PostController@index')->middleware('dev','auth');

Auth::routes();
Route::get('/error-404.html', 'ErrorController@index')->name('404.index');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/getApi','PostController@getGuzzleRequest');

Route::get('/products','ProductController@index')->name('products');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/demo','DemoController@index')->name('demo.form');
Route::post('/demo','DemoController@store');


Route::get('/contact', 'PageController@contact')->name('contact');
Route::post('/contact', 'PageController@storedContact')->name('contact.store');
