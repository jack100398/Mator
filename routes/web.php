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

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Auth::routes();

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/client', function () {
        return view('client');
    })->name('client');

    Route::apiResource('banner', 'BannerController', ['names' => ['index' => 'banner']]);
    Route::get('banner/edit/{banner}', 'BannerController@edit');

    Route::apiResource('/commodity', 'CommodityController', ['names' => ['index' => 'commodity']]);

    Route::get('commodities', 'CommodityController@getCommodities');

    // Route::get('/client', function () {
    //     return view('client');
    // })->name('client');

    //api
    Route::post('/upload', function () {
        $imageURL = request()->file('img')->store('public');
        return 'storage/' . substr($imageURL, 7);
    });

    Route::prefix('edit-page')->group(function () {
        Route::get('commodity', 'CommodityController@edit')->name('editCommodityPage');

        Route::get('banner', 'BannerController@edit')->name('editBannerPage');
    });

    Route::get('client-commodity', 'CommodityController@search');
});

Route::get('/home', 'HomeController@index')->name('home');
