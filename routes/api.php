<?php

use App\Http\Controllers\FetchAllStudentsController;
use App\Http\Controllers\FetchAllSubscribeHasMenyStudentController;
use Illuminate\Support\Facades\Route;

Route::get('/students', FetchAllStudentsController::class)
    ->name('student.index');

Route::get('/student/{user}/subscribe', FetchAllSubscribeHasMenyStudentController::class)
    ->name('student.subscribe');
