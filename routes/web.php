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

/*Route::get('/', 'PostController@index'); //一覧画面*/
Route::get('/posts/create', 'PostController@create'); //投稿作成画面
Route::get('/posts/{post}/edit', 'PostController@edit'); //投稿編集画面
Route::put('/posts/{post}', 'PostController@update'); //編集操作
Route::get('/posts/{post}', 'PostController@show'); //投稿詳細画面
Route::post('/posts', 'PostController@store'); //投稿保存操作
Route::delete('/posts/{post}', 'PostController@delete'); //投稿削除
Route::get('/categories/{category}', 'CategoryController@index'); //カテゴリー一覧画面


Route::get('/categories/reviews/{review}', 'CategoryController@show'); //詳細表示
Route::get('/categories/{category}', 'CategoryController@category'); //カテゴリー一覧画面
Route::get('/categories/reviews/{review}/edit', 'CategoryController@edit');
Route::put('/categories/reviews/{review}', 'CategoryController@update');
//検索機能
Route::get('/search','SearchController@index');
Route::post('/search/word','SearchController@searchWord');




Route::get('/', 'HomeController@index'); 
Route::get('/kotteri','ReviewController@kotteri');

Route::get('/mypage','MypageController@index');
Route::get('/mypage/profile','MypageController@show');
