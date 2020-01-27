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

Route::redirect('/', '/posts');

Route::resource('posts', 'PostController');
Route::get('/tag/show/{id}', 'TagController@show')-> name ('tag.show');
// Route::get('/tag/post/{id}', 'TagController@post')-> name ('tag.post');
