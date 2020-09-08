<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('{user:unique_id}', 'SubscriptionController@index')->name('subscriptions.index');

Route::group(['middleware' => ['auth']], function () {
    Route::get('{user:unique_id}/edit', 'SubscriptionController@index')->name('subscriptions.edit');
    Route::resource('me/subscriptions', 'SubscriptionController')->except('index');
//    Route::resource('subscriptions', 'SubscriptionController');
    Route::get('me/add_subscription', 'SubscriptionController@addSubscription')->name('me.add.subscription');
    Route::get('settings', 'SettingController@index')->name('settings');
    Route::delete('me', 'SettingController@deleteAccount')->name('user.delete');
});

Route::prefix('auth')->group(function () {
    Route::get('twitter', 'Auth\LoginController@login')->name('twitter.login');
    Route::get('twitter/callback', 'Auth\LoginController@callback');
});
