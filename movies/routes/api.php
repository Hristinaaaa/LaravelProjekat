<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GlumacController;
use App\Http\Controllers\UserFilmController;
use App\Http\Controllers\ReziserFilmController;
use App\Http\Controllers\GlumacFilmController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\ReziserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\API\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('users', UserController::class)->only('index', 'show');
Route::resource('reziseri', ReziserController::class)->only('index', 'show');
Route::resource('films', FilmController::class)->only('index', 'show');
Route::resource('glumci', GlumacController::class)->only('index', 'show');


Route::resource('users.films', UserFilmController::class)->only(['index']);
Route::resource('glumci.films', GlumacFilmController::class)->only(['index']);
Route::resource('reziseri.films', ReziserFilmController::class)->only(['index']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function (Request $request) {
        return auth()->user();
    });

    Route::resource('films', FilmController::class)->only(['update', 'store', 'destroy']);

    Route::post('/logout', [AuthController::class, 'logout']);
});