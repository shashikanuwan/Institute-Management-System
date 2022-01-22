<?php

namespace App\Http\Controllers;

use App\Models\User;

class FetchAllStudentsController extends Controller
{
    public function __invoke()
    {
        return User::role('student')->get();
    }
}
