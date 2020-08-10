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

Auth::routes([
  'register' => false,
  'reset' => false,
  'verify' => false
]);

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth']], function () {
    Route::resource('subscriptions', 'SubscriptionController');
    Route::get('/add-subscription', 'SubscriptionController@addSubscription')->name('add.subscription');
    Route::get('settings', 'SettingController@index')->name('settings');
});

Route::prefix('auth')->group(function () {
    Route::get('twitter', 'Auth\LoginController@login')->name('twitter.login');
    Route::get('twitter/callback', 'Auth\LoginController@callback');
});
