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
Route::get('{path}', 'HomeController@index')->where( 'path' , '([A-z\d\-\/_.]+)?' );
Route::post('/author', 'TestController@addauthor')->name('author');
Route::post('/faculty', 'TestController@addfaculty')->name('faculty');
Route::post('/course', 'TestController@addcourse')->name('course');
Route::post('/depertment', 'TestController@adddepertment')->name('depertment');
Route::post('/addbook', 'TestController@addbook')->name('addbook');
// Route::post('/addbookinfo', 'TestController@addbookinfo')->name('addbookinfo');

