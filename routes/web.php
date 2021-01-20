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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


#################### Headline Controller ####################

Route::get('headline/{business}/{emotion}', 'HeadlineController@keyword_page');
Route::get('headline/{business}/{emotion}/{keyword}', 'HeadlineController@list_headline');
Route::post('headline/findnow', 'HeadlineController@find_now');

#################### Headline Controller ####################


#################### Admin Controller ####################

Route::get('admin/login','AdminController@loginform');
Route::get('admin/dashboard', 'AdminController@index');

// Check authentictaion
Route::post('admin/check-login', 'AdminController@checklogin');

#################### Admin Controller ####################


#################### Admin Headline Controller ####################

Route::get('admin/headline/create', 'AdminHeadlineController@create_headline');
Route::get('admin/headline/emotion', 'AdminHeadlineController@add_emotion');

#################### Admin Headline Controller ####################
