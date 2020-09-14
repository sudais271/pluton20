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
Route::get('/new-blog', 'blogController@new');
Route::post('/newBlog', 'blogController@publish');
Route::post('/ajaxRequest', 'blogController@ajaxRequestPost');
Route::post('/getCategory', 'blogController@getCategory');
Route::get('/blog/{slug}', 'blogController@blogcategories');
Route::post('/comment', 'blogController@comment');
Route::post('/upvote', 'blogController@upvote')->name('upvote');
Route::post('/downvote', 'blogController@downvote')->name('downvote');
Route::get('/category/{category}', 'blogController@displsyCategory' );
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
