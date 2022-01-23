<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminDashboardRequest;

class AdminDashboardController extends Controller
{
    public function __invoke(AdminDashboardRequest $request)
    {
        return view('admin-dashboard');
    }
}
