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


Route::prefix('admin')->group(function () {
    Auth::routes();

    Route::get('/', function () {
        return redirect()->route('commodity');
    });

    Route::middleware(['auth'])->group(function () {
        Route::apiResource('banner', 'BannerController', ['names' => ['index' => 'banner']]);
        Route::get('banner/edit/{banner}', 'BannerController@edit');

        Route::apiResource('/commodity', 'CommodityController', ['names' => ['index' => 'commodity']]);

        Route::get('commodities', 'CommodityController@getCommodities');

        //api
        Route::post('/upload', function () {
            $imageURL = request()->file('img')->store('public');
            return 'storage/' . substr($imageURL, 7);
        });

        Route::apiResource('third', 'ThirdLinkController', ['names' => ['index' => 'third']]);

        Route::prefix('edit-page')->group(function () {
            Route::get('commodity', 'CommodityController@edit')->name('editCommodityPage');
            Route::get('link', 'ThirdLinkController@edit')->name('editLinkPage');
            Route::get('banner', 'BannerController@edit')->name('editBannerPage');
        });

        Route::prefix('create-page')->group(function () {
            Route::get('link', 'ThirdLinkController@create')->name('createThirdLinkPage');
        });

        Route::get('client-commodity', 'CommodityController@search');
    });
});

Route::prefix('zh')->group(function () {
    Route::get('index', 'ClientController@index')->name('index');
    Route::get('news', 'ClientController@news')->name('news');
    Route::get('contact', 'ClientController@contact')->name('contact');
    Route::get('recommend', 'ClientController@recommend')->name('recommend');
    Route::get('product', 'ClientController@product')->name('product');
    Route::get('article', 'ClientController@article')->name('article');
    Route::get('product-list', 'ClientController@productList')->name('product-list');
    Route::get('product-detail', 'ClientController@productDetail')->name('product-detail');
});


Route::prefix('/')->group(function () {
    Route::get('/', function () {
        return redirect()->route('index');
    })->name('home');

    Route::get('/home', function () {
        return redirect()->route('index');
    });
});
