<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Models\User;

class AdminDashboardController extends Controller
{
    public function __invoke(AdminRequest $request)
    {
        return view('admin-dashboard')
        ->with([
            'users' => User::role('student')
            ->paginate(10)
        ]);
    }
}
