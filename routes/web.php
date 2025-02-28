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

Route::get('changeLang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ar'])) {
        session(['locale' => $locale]);
    }
    App::setLocale($locale);
    return redirect()->back();
});

Route::get('/', "Website\HomeController@index");

Route::get('services', "Website\HomeController@services");
Route::get('solutions', "Website\HomeController@solutions");

Route::get('services/{slug}', "Website\HomeController@service");

Route::get('solutions/{slug}', "Website\HomeController@solution");
