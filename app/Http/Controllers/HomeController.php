<?php

namespace App\Http\Controllers;

use App\Models\Program;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('welcome')
            ->with([
                'programs' => Program::query()
                    ->with(['grade', 'subject', 'teacher'])
                    ->paginate(16)
            ]);
    }
}
