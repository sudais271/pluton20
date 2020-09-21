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
    return view('welcome');
});
Route::get('/blog', 'blogController@index')->name('blog');
Route::get('/new-blog', 'blogController@new')->middleware('verified');
Route::post('/newBlog', 'blogController@publish');
Route::post('/ajaxRequest', 'blogController@ajaxRequestPost');
Route::post('/getCategory', 'blogController@getCategory');
Route::get('/blog/{slug}', 'blogController@blogcategories');
Route::post('/comment', 'blogController@comment');
Route::post('/upvote', 'blogController@upvote')->name('upvote')->middleware('verified');
Route::post('/downvote', 'blogController@downvote')->name('downvote')->middleware('verified');
Route::get('/category/{category}', 'blogController@displsyCategory' );
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
