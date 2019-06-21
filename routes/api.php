<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('login', 'api\UserController@login');
Route::post('register', 'api\UserController@register');
Route::post('/article/store','ArticleController@store');

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::resource('posts','PostController');
Route::get('/create', 'api\UserController@create');
Route::resource('article','ArticleController');
Route::post('/article/store','ArticleController@store');
Route::get('/post/approve/{id}','PostController@approver');
Route::delete('/post/delete/{id}','PostController@destroy');
