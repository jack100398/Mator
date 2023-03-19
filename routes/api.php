<?php

use App\GlobalSetting;
use App\Mail\CustomerMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('client-commodity', 'CommodityController@search');


Route::post('send_mail', function (Request $request) {
    $data = $request->validate([
        'title' => 'required',
        'name' => 'required',
        'sex' => 'required',
        'phone' => 'required|numeric|min:10',
        'mail' => 'required|email',
        'text' => 'required|string',
    ]);

    $mail = GlobalSetting::query()->where('event', 'mail')->first()->value;

    return Mail::to($mail)->queue(new CustomerMail($data));
});
