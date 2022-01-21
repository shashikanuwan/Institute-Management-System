<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscribeRequest;
use App\Models\Program;
use Illuminate\Support\Facades\Auth;

class SubscribeController extends Controller
{
    public function __invoke(SubscribeRequest $request)
    {
        /** @var Program $program */

        if (Program::forHash($request->get('program_id'))->firstOrFail()->hasRequest(Auth::user())) {
            return redirect()
                ->back()
                ->with('primary', 'Have already been subscribed');
        }

        $program = Program::forHash($request->get('program_id'))->firstOrFail();
        $program->enrollStudent(Auth::user());

        return redirect()
            ->route('student.dashboard')
            ->with('success', 'subscribed');
    }
}
