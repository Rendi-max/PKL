<?php

use App\Http\Controllers\wilayahController;
use App\Http\Controllers\wilayahMataUangController;
use App\Models\WilayahMataUang;
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
Route::get('/wilayah', [wilayahController::class, 'index']);
Route::post('addwilayah', [wilayahController::class, 'store']);
Route::patch('editwilayah/{id}', [wilayahController::class, 'update']);
Route::delete('deletewilayah/{id}', [wilayahController::class, 'destroy']);

Route::get('/uang', [wilayahMataUangController::class, 'index']);
Route::post('/addmatauang', [wilayahMataUangController::class, 'store']);
Route::put('/editmatauang/{id}', [wilayahMataUangController::class, 'update']);
Route::delete('/deletematauang/{id}', [wilayahMataUangController::class, 'destroy']);
