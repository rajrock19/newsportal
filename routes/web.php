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

Route::prefix('admin')->group(function () {
//Authetication 
Route::get('/login',[AuthController::class,'index'])->name('admin.login');
Route::get('/register',[AuthController::class,'create'])->name('admin.register');
Route::Post('/store',[AuthController::class,'store'])->name('admin.store');
Route::Post('/authenticate',[AuthController::class,'authenticate'])->name('admin.authenticate');
Route::get('/logout',[AuthController::class,'logout'])->name('admin.logout');

Route::get('/profile/show',[AuthController::class,'profile_show'])->name('admin.profile.show');

//dashboard
Route::get('/dashboard',[AuthController::class,'dashnboard'])->name('admin.dashboard');

//

});