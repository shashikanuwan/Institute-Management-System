<?php

namespace App\View\Components;

use App\Models\Grade;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class CreateProgram extends Component
{
    public Collection $users;
    public Collection $garades;
    public Collection $subjects;

    public function __construct()
    {
        $this->users = User::query()->role('teacher')->get();
        $this->garades = Grade::query()->get();
        $this->subjects = Subject::query()->get();
    }

    public function render()
    {
        return view('components.create-program');
    }
}
