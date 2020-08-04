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

Route::get('/', function () {
    return redirect('home');
});

Route::resource('users', 'UserController');
Route::resource('categories', 'CategoryController');
Route::resource('videos', 'VideoController');
Route::resource('comments', 'CommentController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/myVideos', 'UserController@myVideos');
Route::get('/defineAsAdmin/{user}', 'UserController@defineAsAdmin');
Route::get('/revokeAdmin/{user}', 'UserController@revokeAdmin');

//api vimeo
Route::get('/vimeocallback', 'VideoController@vimeoCallback');
Route::get('/uploadvideocallback', 'VideoController@uploadVideoCallback');
Route::post('/postVideoToVimeo', 'VideoController@postVideoToVimeo');

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');
