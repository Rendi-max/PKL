<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BadWrodsController;
use App\Http\Controllers\LinkClickController;
use App\Http\Controllers\LinkManagerController;
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
        Route::get('/change/{id}', [UserController::class, 'statusChange']);
        Route::get('/exportlog', [AdminController::class, 'ExportLog']);
        Route::get('/exportlinks', [AdminController::class, 'ExportLink']);
        Route::get('/exportuser', [AdminController::class, 'ExportUser']);
        Route::resource('/usersManagement', UserAdminController::class);
        Route::resource('badWords', BadWrodsController::class);
    });
    Route::get('/logout', [SessionController::class, 'Logout']);
    Route::middleware('user')->group(function (){
        Route::get('/dashboardUser', [UserController::class, 'dashboardUser']);
        Route::get('/links', [UserController::class, 'indexLinks']);
        Route::get('/profile', [UserController::class, 'indexProfile']);
        Route::get('/logs', [UserController::class, 'indexLogActivity']);
        Route::get('exportlink', [UserController::class, 'ExportLink']);
        Route::resource('/linksManagement', LinkManagerController::class);
    });
});

Route::get('/l={links}', [LinkClickController::class, 'click']);
Route::get('/linkPassword={id}', [LinkClickController::class, 'indexClick']);
Route::post('/password={id}', [LinkClickController::class, 'PasswordCheck']);
Route::get('/404/{message}', [LinkClickController::class, 'indexError']);
Route::get('/QR={id}', [LinkClickController::class, 'QrCode']);

Route::middleware('guest')->group(function () {
    Route::get('/login', [SessionController::class, 'indexLogin'])->name('login');
    Route::get('/register', [SessionController::class, 'indexRegister']);
    Route::post('/login', [SessionController::class, 'Login']);
    Route::post('/register', [SessionController::class, 'Register']);
    Route::get("/", function() { 
        return view('Users.Index.IndexUser'); 
    });
});
