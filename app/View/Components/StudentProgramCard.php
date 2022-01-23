<?php

namespace App\View\Components;

use App\Models\Subscribe;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class StudentProgramCard extends Component
{
    public Collection $subscribes;

    public function __construct()
    {
        $this->subscribes = Subscribe::query()
            ->where('user_id', Auth::user()->id)
            ->with('program.grade', 'program.subject', 'program.teacher')
            ->orderBy('id', 'DESC')
            ->get();
    }

    public function render()
    {
        return view('components.student-program-card');
    }
}
