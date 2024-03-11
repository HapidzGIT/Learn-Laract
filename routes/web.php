<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SidesController;
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

Route::middleware(['guest'])->group(function () {
    Route::get('/', [SidesController::class, 'index'])->name('login');
    Route::post('/', [SidesController::class, 'login']);
});

Route::get('/home', function () {
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/pembaca', [AdminController::class, 'pembaca']);
    Route::get('/admin/penulis', [AdminController::class, 'penulis']);
    Route::get('/admin/peredar', [AdminController::class, 'peredar']);

    Route::get('/logout', [SidesController::class, 'logout']);
});
