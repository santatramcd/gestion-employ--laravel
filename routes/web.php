<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\EmployerController;



Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/', [AuthController::class, 'handleLogin'])->name('handleLogin');

// route securise
Route::middleware('auth')->group(function (){
    Route::get('dashboard',[AppController::class, 'index'])->name('dashboard');
    Route::prefix('employers')->group(function(){
        Route::get('/',[EmployerController::class, 'index'])->name('employer.index');
        Route::get('/create',[EmployerController::class, 'create'])->name('employer.create');
        Route::get('/edit',[EmployerController::class, 'edit'])->name('employer.edit');
    });
});