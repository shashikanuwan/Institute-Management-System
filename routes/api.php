<?php

use App\Http\Controllers\FetchAllStudentsController;
use App\Http\Controllers\FetchAllSubscribeHasMenyStudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/student', FetchAllStudentsController::class)
    ->name('student.index');

Route::get('/subscribe', FetchAllSubscribeHasMenyStudentController::class)
    ->name('student.subscribe');
