<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\StudentSubscriptionController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\UnSubscribeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)
    ->name('welcome');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard',  DashboardController::class)
        ->name('dashboard');

    Route::get('/student/dashboard',  StudentDashboardController::class)
        ->name('student.dashboard');

    Route::post('/subscribe', SubscribeController::class)
        ->name('subscribe');

    Route::get('/un-subscribe/{subscribe}', UnSubscribeController::class)
        ->name('un.subscribe');
});

Route::middleware(['role:admin'])->group(function () {
    Route::get('/admin/dashboard',  AdminDashboardController::class)
        ->name('admin.dashboard');

    Route::get('/student/{user}/subscribe',  StudentSubscriptionController::class)
        ->name('student.subscribe');

    Route::resource('program', ProgramController::class)
        ->except('show');
});

require __DIR__ . '/auth.php';
