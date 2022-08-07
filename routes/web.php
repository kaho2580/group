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

// Route::get('/', 'PostController@index');
// Route::get('/posts/create', 'PostController@create');
// Route::get('/posts/{post}/edit', 'PostController@edit'); 
// Route::put('/posts/{post}', 'PostController@update');
// Route::get('/posts/{post}', 'PostController@show');
// Route::post('/posts', 'PostController@store');
// Route::delete('/posts/{post}', 'PostController@delete');
// Route::get('/categories/{category}', 'CategoryController@index');

Route::get('/categories/{category}', 'CategoryController@category'); //カテゴリー一覧画面
Route::get('/categories/reviews/{review}', 'CategoryController@show'); //詳細表示
Route::get('categories/reviews/edit/{review}','CategoryController@edit');
Route::get('categories/reviews/create','CategoryController@create');


//検索機能
Route::get('/search','SearchController@index');
Route::post('/search/word','SearchController@searchWord');


Route::get('/', 'CategoryController@index'); 

Route::get('/kotteri','ReviewController@kotteri');

Route::get('/mypage','MypageController@index');
Route::get('/mypage/profile','MypageController@show');

Route::get('/map', 'MapController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

