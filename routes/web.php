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
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');


// Route::get('/commodity', function () {
//     return view('commodity');
// })->name('commodity');


Route::post('/upload', function () {
    $imageURL = request()->file('img')->store('public');
    return 'storage/' .substr($imageURL, 7);
});

Route::apiResource('/commodity', 'CommodityController', ['names' => ['index' => 'commodity']]);

Route::get('commodities', 'CommodityController@getCommodities');

Route::get('/client', function () {
    return view('client');
})->name('client');
