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
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/productSettings','ProductSettings\ProductSettingsController@index')->name('productSettings');
    Route::resource('/category','ProductSettings\CategoryController');
    Route::resource('/subCategory','ProductSettings\SubCategoryController');
    Route::resource('/color','ProductSettings\ColorController');
    Route::resource('/size','ProductSettings\SizeController');
    Route::resource('/unit','ProductSettings\UnitController');
    Route::resource('/status','ProductSettings\StatusController');
    Route::resource('/product','Product\ProductController');
});
