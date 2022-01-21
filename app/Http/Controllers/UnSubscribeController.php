<?php

namespace App\Http\Controllers;

use App\Http\Requests\UnSubscribeRequest;
use App\Models\Subscribe;

class UnSubscribeController extends Controller
{
    public function __invoke(UnSubscribeRequest $request, Subscribe $subscribe)
    {
        $subscribe->delete();

        return redirect()
            ->back()
            ->with('success', 'Class unsubscribed successful');
    }
}
