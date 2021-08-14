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

Route::get('/','frontend\FrontendController@index')->name('index');

Route::get('dashboard','Backend\BackendController@index')->name('dashboard');
Route::get('blog','frontend\FrontendController@blog')->name('blog');
Route::get('tvc','frontend\FrontendController@tvc')->name('tvc');
Route::get('package','frontend\FrontendController@package')->name('package');

Route::resource('plans','backend\PlanController');
Route::resource('subplans','backend\SubplanController');
