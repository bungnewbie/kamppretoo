<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\SocialAuthController;

Auth::routes();

Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

Route::get('home', [HomeController::class, 'index']);
Route::post('{url_token}', [HomeController::class, 'send']);
Route::get('{url_token}', [HomeController::class, 'form']);
Route::get('auth/{provider}', [SocialAuthController::class, 'redirectToProvider']);
Route::get('auth/{provider}/callback', [SocialAuthController::class, 'handleProviderCallback']);

