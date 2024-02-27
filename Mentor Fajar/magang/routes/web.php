<?php

use App\Models\task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\editController;
use App\Http\Controllers\todoController;
use App\Http\Controllers\loginController;

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
//Login
Route::get('/', function () {
    return view('index');
});
Route::post('/login',[loginController::class,'store']);

//Logout
Route::post('logout', function(Request $request){
    Auth::logout();
    $request->session()->invalidate();
    return redirect('/');
})->middleware('auth');

//Halaman Home
Route::get('/home', function(){
    return view('welcome',[
        'tasks' => task::all(),
    ]);
})->middleware('auth');

//Proses To do
Route::resource('task', todoController::class);
Route::resource('edittask', editController::class);
