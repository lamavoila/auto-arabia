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

Route::get('changeLang/{locale}', "Website\HomeController@changeLang");

Route::get('/', "Website\HomeController@index");
Route::get('/route/clear', "Website\HomeController@clear");

Route::get('contact-us', "Website\HomeController@contact");
Route::post('save-contact', "Website\HomeController@saveContact");
Route::get('services', "Website\HomeController@services");
Route::get('solutions', "Website\HomeController@solutions");
Route::get('projects', "Website\HomeController@projects");

Route::get('services/{slug}', "Website\HomeController@service");

Route::get('solutions/{slug}', "Website\HomeController@solution");
Route::get('projects/{slug}', "Website\HomeController@project");
