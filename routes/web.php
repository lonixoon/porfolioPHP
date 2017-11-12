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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
/* страницы не требующие авторизации */
Route::get('/work', 'PageController@work');
Route::get('/blog', 'PageController@blog');
Route::get('/about', 'PageController@about');


/* страницы требующие авторизацию */
Route::group(
    ['middleware' => 'auth'], function () {
    /* страницы */
    Route::get('/adminSkill', 'PageController@adminSkill');
    Route::get('/adminBlog', 'PageController@adminBlog');
    Route::get('/adminWork', 'PageController@adminWork');

    /* сохраненение данных */

    /* тестовые страницы */
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/test1', 'Test1Controller@index');
    Route::get('/test1/create', 'Test1Controller@create');
    Route::get('/test1/last', 'Test1Controller@last');
    Route::post('/test1/send', 'Test1Controller@send');
});

