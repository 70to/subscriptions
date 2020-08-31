<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//@link https://teratail.com/questions/172148
Route::group(['middleware' => ['auth']], function () {
    Route::get('services', 'Api\ServiceController@get');
    Route::get('my-subscriptions', 'Api\SubscriptionController@getMySubscriptions');
    Route::post('tweet', 'Api\SubscriptionController@tweet');
});
