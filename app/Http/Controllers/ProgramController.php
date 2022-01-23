<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Http\Requests\ProgramRequest;
use App\Models\Grade;
use App\Models\Program;
use App\Models\Subject;
use App\Models\User;

class ProgramController extends Controller
{
    public function index()
    {
        return view('program');
    }

    public function create()
    {
        return view('create-program');
    }

    public function store(ProgramRequest $request, Program $program)
    {
        $program->create($request->validated());

        return redirect()
            ->route('program.index')
            ->with('success', 'Class created');
    }

    public function edit(AdminRequest $request, Program $program)
    {
        return view('edit-program')
            ->with([
                'program' => $program,
                'users' =>  User::query()->get(),
                'garades' =>  Grade::query()->get(),
                'subjects' =>  Subject::query()->get(),
            ]);
    }

    public function update(ProgramRequest $request, Program $program)
    {
        $program->update($request->validated());

        return redirect()
            ->route('program.index')
            ->with('success', 'Class updated');
    }

    public function destroy(AdminRequest $request, Program $program)
    {
        $program->delete();

        return redirect()
            ->route('program.index')
            ->with('success', 'Class deleted');
    }
}
