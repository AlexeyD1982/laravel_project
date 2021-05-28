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

Route::get('/', 'StaticController@index');
Route::get('/about-us', 'StaticController@about');

Route::resource('/articles', 'ArticlesController');
Route::resource('/comments', 'CommentController');
Route::resource('/shop', 'ProductsController');
Route::get('/user', 'UserController@index');

/*
Route::get('/hello', function () {
    return 'Hello world';
});


Route::get('/about-us', function () {
    return view('static/about');
});

Route::get('/article/{id}/{second_param}', function ($id, $second_param) {
    return 'ID article ' . $id . ' Second param ' . $second_param;
});
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
