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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/book', 'TestController@getbook')->name('book');
Route::post('/author', 'TestController@addauthor')->name('author');
Route::post('/faculty', 'TestController@addfaculty')->name('faculty');
Route::post('/course', 'TestController@addcourse')->name('course');
Route::post('/department', 'TestController@adddepertment')->name('depertment');
Route::post('/addbook', 'TestController@addbook')->name('addbook');
Route::get('/search/author_id', 'TestController@search')->name('search');

// Route::get('{path}', 'HomeController@index')->where( 'path' , '([A-z\d\-\/_.]+)?' );
