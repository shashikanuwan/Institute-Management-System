<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard',  DashboardController::class)
        ->name('dashboard');

    Route::get('/student/dashboard',  StudentDashboardController::class)
        ->name('student.dashboard');
});

require __DIR__ . '/auth.php';
