<?php

namespace App\Http\Controllers;

use App\Models\User;

class FetchAllSubscribeHasMenyStudentController extends Controller
{
    public function __invoke(User $user)
    {
        return response($user->subscribes);
    }
}
