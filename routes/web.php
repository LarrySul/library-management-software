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


Route::get('/', 'UserController@home');
Route::get('/borrow', 'UserController@borrow');
Route::get('/studentlogin', 'UserController@login');


// Route::get('admin', 'HomeController@index');
Route::get('admin/home', 'HomeController@home');
// get students to sign in
Route::post('user/register', 'StudentController@register');
// get students to login
Route::post('user/login', 'StudentController@signin');
// show all registered students
Route::get('admin/regStudent', 'StudentController@show');
// delete a student
Route::get('admin/deletestudent&{id}', 'StudentController@destroy');

//book index page
Route::get('admin/addbook', 'BookController@index');

// list all available books
Route::get('admin/allBooks', 'BookController@allAvailableBooks');
// add book
Route::post('upload','BookController@addBook');
// edit book 
Route::get('admin/edit&{id}', 'BookController@edit');
// update book
Route::post('admin/update&{id}', 'BookController@update');
// delete book
Route::get('admin/deletehostel&{id}', 'BookController@destroy');

Auth::routes();