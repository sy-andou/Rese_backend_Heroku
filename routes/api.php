<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ReserveController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\StorageController;
use App\Http\Controllers\MailSendcontroller;

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

Route::group(
    [
        'middleware' => ['auth:api'],
        'prefix' => 'auth'
    ],
    function ($router) {
        Route::post('register', [AuthController::class, 'register'])->withoutMiddleware(['auth:api']);
        Route::post('login', [AuthController::class, 'login'])->withoutMiddleware(['auth:api']);
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('refresh', [AuthController::class, 'refresh']);
        Route::get('user', [AuthController::class, 'me']);

        Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
        Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
    }
);

Route::apiResource('/user', UserController::class);
Route::apiResource('/shop', ShopController::class);
Route::apiResource('/area', AreaController::class);
Route::apiResource('/genre', GenreController::class);
Route::apiResource('/favorite', FavoriteController::class);
Route::apiResource('/reserve', ReserveController::class);
Route::apiResource('/review', ReviewController::class);
Route::apiResource('/storage', StorageController::class);
Route::apiResource('/mail', MailSendcontroller::class);



