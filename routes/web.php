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

Route::get('/','FrontController@index');
Route::get('blog','FrontController@blog');
Route::get('read/{slug}','FrontController@read')->name('read');
Route::post('comment/addComment/{post}','CommentController@addComment')->name('addComment');
Route::post('comment/addReply/{comment}','CommentController@addReply')->name('addReply');
Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
Route::resource('admin/post', 'PostController');
Route::resource('admin/kategori', 'KategoriController');
Route::resource('admin/upload','UploadController');
Route::post('admin/upload/kirim', 'UploadController@kirim')->name('kirim');;
Route::post('admin/upload/hapus', 'UploadController@hapus')->name('hapus');
});

