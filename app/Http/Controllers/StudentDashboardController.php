<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentDashboardRequest;

class StudentDashboardController extends Controller
{
    public function __invoke(StudentDashboardRequest $request)
    {
        return view('student-dashboard');
    }
}
