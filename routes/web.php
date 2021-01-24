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

//mailプレビュー
//Route::get('mailable', function () {
//    $subscription = App\Models\Subscription::first();
//    return new App\Mail\CommingPaymentDate($subscription, 10);
//});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/terms', function () {
    return view('terms');
})->name('terms');
Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('{user:slug}', 'SubscriptionController@index')->name('subscriptions.index');

Route::group(['middleware' => ['auth']], function () {
    Route::get('{user:slug}/edit', 'SubscriptionController@index')->name('subscriptions.edit');
    Route::resource('subscriptions', 'SubscriptionController')->except('index');
    Route::get('me/add_subscription', 'SubscriptionController@addSubscription')->name('me.add.subscription');
    Route::get('me/settings', 'SettingController@index')->name('settings');
    Route::post('me/settings', 'SettingController@update')->name('settings.update');
    Route::delete('me', 'SettingController@deleteAccount')->name('user.delete');
});

Route::prefix('auth')->group(function () {
    Route::get('twitter', 'Auth\LoginController@login')->name('twitter.login');
    Route::get('twitter/callback', 'Auth\LoginController@callback');
//    Route::get('google', 'Auth\LoginController@login')->name('google.login');
//    Route::get('google/callback', 'Auth\LoginController@callback');
});
