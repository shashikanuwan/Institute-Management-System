<?php

namespace App\Http\Controllers;

use App\Http\Resources\SubscribeResource;
use App\Models\User;

class FetchAllSubscribeHasMenyStudentController extends Controller
{
    public function __invoke(User $user)
    {
        $subscribe = $user->subscribes;
        
        return SubscribeResource::collection($subscribe);
    }
}
