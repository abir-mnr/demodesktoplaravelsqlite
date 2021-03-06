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

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::name('blogs_path')->get('/', 'BlogsController@index');
Route::name('create_blog_path')->get('/blogs/create', 'BlogsController@create');
Route::name('store_blog_path')->post('/blogs', 'BlogsController@store');
Route::name('blog_path')->get('/blogs/{id}', 'BlogsController@show');
Route::name('edit_blog_path')->get('/blogs/{id}/edit', 'BlogsController@edit');
Route::name('update_blog_path')->put('/blogs/{id}','BlogsController@update');