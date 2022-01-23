<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminDashboardRequest;
use App\Models\User;

class AdminDashboardController extends Controller
{
    public function __invoke(AdminDashboardRequest $request)
    {
        return view('admin-dashboard')
        ->with([
            'users' => User::role('student')
            ->paginate(10)
        ]);
    }
}
