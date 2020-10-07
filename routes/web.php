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

Route::view('/', 'base/index');

/*
|--------------------------------------------------------------------------
| Auth / Callback Routes
|--------------------------------------------------------------------------
*/

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('verification/email/{token}', 'Auth\VerificationController@verify')->name('verification.email');
Route::post('verification/email/resend', 'Auth\VerificationController@resend')
  ->name('verification.email.resend')
  ->middleware('auth');

Route::get('auth/discord', 'Auth\DiscordController@redirectToDiscord');
Route::get('auth/discord/callback', 'Auth\DiscordController@handleDiscordCallback');

/*
|--------------------------------------------------------------------------
| Test Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'test', 'middleware' => 'auth' ], function () {
  Route::get('sendmail/{email}', 'Test\SendMail@submit')->name('test.email');
});

/*
|--------------------------------------------------------------------------
| Clone Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'clonage', 'middleware' => 'auth'], function () {
    Route::get('/', 'Clonage\HomeController@home')->name('clonage.home');
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
  Route::get('/tokens', 'Admin\HomeController@AddTokens')->name('admin.tokens');
  Route::post('/tokens', 'Admin\HomeController@AddTokensRequest')->name('admin.tokens.post');
  Route::get('/clonage', 'Clonage\HomeController@homeTest')->name('admin.clonage.test');
});

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api'], function () {
    Route::get('token', 'Api\TokenController@get');
    Route::post('auth', 'Api\SocketAuthentification@auth');
    Route::post('storage/guildData', 'Api\StorageController@addGuildData');

    Route::get('users/exist', 'Api\UserController@exist');
    Route::get('users/guilds/list', 'Api\UserController@guildList');
    Route::get('users/guilds/get', 'Api\StorageController@getGuildData');

    Route::get('users/count', 'Api\UserController@stat');
    Route::get('guildData/count', 'Api\StorageController@statGuildData');
});