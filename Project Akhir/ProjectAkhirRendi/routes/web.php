<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LinkClickController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserAdminController;

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

Route::middleware('auth')->group(function(){
    Route::middleware('admin')->group(function(){
        Route::get('/dashboard', [AdminController::class, 'indexDashboard']);
        Route::get('/linksData', [AdminController::class, 'indexDataLink']);
        Route::get('/usersData', [AdminController::class, 'indexUsers']);
        Route::get('/logActivity', [AdminController::class, 'indexLogActivity']);;
        Route::resource('/usersManagement', UserAdminController::class);
        Route::get('/change/{id}', [UserController::class, 'statusChange']);
    });
    Route::get('/logout', [SessionController::class, 'Logout']);
});

Route::get('/l={links}', [LinkClickController::class, 'click']);

Route::middleware('guest')->group(function () {
    Route::get('/login', [SessionController::class, 'indexLogin'])->name('login');
    Route::get('/register', [SessionController::class, 'indexRegister']);
    Route::post('/login', [SessionController::class, 'Login']);
    Route::post('/register', [SessionController::class, 'Register']);
});
