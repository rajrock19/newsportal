<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;



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

Route::get('admin/login',[AuthController::class,'index'])->name('admin.login');
Route::get('admin/register',[AuthController::class,'create'])->name('admin.register');
Route::Post('admin/store',[AuthController::class,'store'])->name('admin.store');

Route::Post('admin/authenticate',[AuthController::class,'authenticate'])->name('admin.authenticate');

Route::get('admin/dashboard',[AuthController::class,'dashnboard'])->name('admin.dashboard');