<?php

use Illuminate\Support\Facades\Route;
use Modules\User\App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([], function () {
    Route::resource('user', UserController::class);
    Route::get('/', [UserController::class, 'loginPage'])->name('loginPage');// Route::get('user/login{id}', [UserController::class, 'login']);
    Route::post('/login', [UserController::class, 'login'])->name('login');
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
});



