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
Route::get('/about', 'AboutController@index');
Route::get('/blog', 'BlogController@index');
Route::get('/work', 'WorkController@index');

/* вывод API */
Route::get('/api/about', 'AboutController@indexAPI');
Route::get('/api/blog', 'BlogController@indexAPI');
Route::get('/api/work', 'WorkController@indexAPI');

/* маршруты требующие авторизацию */
Route::group(
    ['middleware' => 'auth'], function () {
    /* страницы */
    Route::get('/admin/about', 'AboutController@indexAdmin');
    Route::get('/admin/blog', 'BlogController@indexAdmin');
    Route::get('/admin/work', 'WorkController@indexAdmin');

    /* сохраненение данных */
    Route::post('/admin/about/save', 'AboutController@save');
    Route::post('/admin/blog/save', 'BlogController@save');
    Route::post('/admin/work/saveWork', 'WorkController@saveWork');
    Route::post('/admin/work/saveFeedback', 'WorkController@saveFeedback');


//    /* тестовые страницы */
//    Route::get('/home', 'HomeController@index')->name('home');
//    Route::get('/test1', 'Test1Controller@index');
//    Route::get('/test1/create', 'Test1Controller@create');
//    Route::get('/test1/last', 'Test1Controller@last');
//    Route::post('/test1/send', 'Test1Controller@send');
});

