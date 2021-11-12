<?php

use App\Http\Controllers\LikeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;
use Symfony\Component\Translation\MessageCatalogue;


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

Route::apiResource('/share', MessageController::class)->only([
    'index', 'store', 'destroy'
]);

Route::apiResource('/user', UserController::class)->only([
    'index' , 'store'
]);

Route::apiResource('/like', LikeController::class)->only([
    'store'
]);
