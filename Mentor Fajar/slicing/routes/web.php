<?php

use App\Http\Controllers\loginController;
use App\Mail\MyTestEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerMailTrap;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('taksonomi', function (){
    return view('taksonomi');
});
Route::get('forum', function(){
    return view('forum');
});
Route::get('faq', function () {
    return view('faq');
});
Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});
Route::post('register',[registerMailTrap::class, 'store'])->name("register.store");

Route::middleware('auth')->group(function(){
    Route::get('user', function(){
        return "User";
    })->middleware('user');
    Route::get('admin', function(){
        return "admin";
    })->middleware('admin');
    Route::get('superAdmin', function(){
        return "super admin";
    })->middleware('super');
});

Route::post('login', [loginController::class, 'login']);
Route::get('logout', [loginController::class, 'logout']);

