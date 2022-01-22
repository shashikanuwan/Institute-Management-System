<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Subscribe;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $subscribedProgramIds = null;

        if (Auth::check()) {
            $subscribedProgramIds = Subscribe::query()
                ->subscribedProgramIds($request->user());
        }

        return view('welcome')
            ->with([
                'programs' => Program::query()
                    ->with(['grade', 'subject', 'teacher'])
                    ->when($subscribedProgramIds != null, function (Builder $query) use ($subscribedProgramIds) {
                        $query->whereNotIn('id', $subscribedProgramIds);
                    })
                    ->paginate(16)
            ]);
    }
}
