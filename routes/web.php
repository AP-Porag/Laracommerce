<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Front end Web Routes
|--------------------------------------------------------------------------

*/

Route::get('/', function () {
    return view('frontend.index');
})->name('website');


/*
|--------------------------------------------------------------------------
| Back end Web Routes
|--------------------------------------------------------------------------

*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {});
