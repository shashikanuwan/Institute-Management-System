<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscribeRequest;
use App\Models\Program;
use Illuminate\Support\Facades\Auth;

class SubscribeController extends Controller
{
    public function __invoke(SubscribeRequest $request)
    {
        $bool = Program::forHash($request->get('program_id'))->firstOrFail();

        if ($bool->hasRequest(Auth::user())) {
            return redirect()
                ->back()
                ->with('primary', 'Have already been subscribed');
        }

        $bool->enrollStudent(Auth::user());

        return redirect()
            ->route('student.dashboard')
            ->with('success', 'subscribed');
    }
}
