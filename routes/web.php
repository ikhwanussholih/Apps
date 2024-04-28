<?php

use App\Http\Controllers\SesiController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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

// Route::group(['middleware' => 'guest'], function(){
    //     // Route::get('/', [AuthController::class, 'login2'])->name('login2.login2');
    // });

Route::get('/', [SesiController::class, 'index']);
Route::post('/', [SesiController::class, 'login']);

Route::get('/', [AuthController::class, 'admin'])->name('admin.admin');