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

Route::get('/', 'App\Http\Controllers\ArticlesController@index');

Route::get('/pages/contact', 'App\Http\Controllers\ContactsController@index');

Route::get('/article/{article}', 'App\Http\Controllers\ArticlesController@show');

Route::get('/pages/blog', function () {
    return view('/pages/blog', [
        'articles' => App\Models\Article::take(3)->latest()->get(),
        'article' => App\Models\Article::all()
    ]);
});

Route::post('/pages/create_article', 'App\Http\Controllers\ArticlesController@store');

Route::get('/pages/create_article', 'App\Http\Controllers\ArticlesController@create');

Route::get('/article/{article}/edit_post', 'App\Http\Controllers\ArticlesController@edit');

Route::put('/article/{article}', 'App\Http\Controllers\ArticlesController@update');

Route::post('/pages/contact', 'App\Http\Controllers\ContactsController@store');

Route::get('/pages/contact', 'App\Http\Controllers\ContactsController@create');
