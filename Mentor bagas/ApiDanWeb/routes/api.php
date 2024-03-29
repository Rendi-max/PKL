<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\voiceToTextController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('login', [SessionController::class, 'login']);
Route::post('logout', [SessionController::class, 'Logout']);
Route::post('register', [SessionController::class, 'Register']);
Route::post('transform', [voiceToTextController::class, 'Change']);
