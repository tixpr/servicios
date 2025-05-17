<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminitradorMiddleware;

Route::get('/', [WebController::class, 'home'])->name('home-login');
Route::post('/', [WebController::class, 'login']);
Route::middleware(['auth', AdminitradorMiddleware::class])->group(function () {
    Route::get('/logout', [WebController::class, 'logout'])->name('logout');
    Route::prefix('admin')->group(function (){
        Route::get('/', [AdminController::class, 'home'])->name('admin-home');
        Route::get('/create-event', [AdminController::class, 'getCreateEvent'])->name('create-event');
        Route::post('/create-event', [AdminController::class, 'postCreateEvent']);
    });
});
