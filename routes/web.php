<?php


use Illuminate\Support\Facades\Route;

use \App\Modules\Auth\Controllers\AuthController;
use \App\Modules\Home\Controllers\HomeController;
use App\Modules\Examples\Controllers\TableController;

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


Route::prefix('/')->name('home')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('.index');
});

Route::prefix('example')->name('example')->group(function () {
    Route::prefix('table')->name('table')->group(function () {
        Route::get('/', [TableController::class, 'index'])->name('.index');
    });
});


Route::prefix('auth')->name('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('.login');
    Route::get('/register', [AuthController::class, 'register'])->name('.register');
});



