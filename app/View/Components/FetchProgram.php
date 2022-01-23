<?php

namespace App\View\Components;

use App\Models\Program;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class FetchProgram extends Component
{
    public Collection $programs;

    public function __construct()
    {
        $this->programs = Program::query()
            ->with(['teacher', 'grade', 'subject'])
            ->orderBy('id', 'DESC')
            ->get();
    }

    public function render()
    {
        return view('components.fetch-program');
    }
}
