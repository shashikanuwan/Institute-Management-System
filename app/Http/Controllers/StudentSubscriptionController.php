<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Models\Subscribe;
use App\Models\User;

class StudentSubscriptionController extends Controller
{
    public function __invoke(AdminRequest $request, User $user)
    {
        return view('student-subscribe')
            ->with([
                'subscribes' => Subscribe::getStudentSubscribes($user)
                    ->get()
            ]);
    }
}
