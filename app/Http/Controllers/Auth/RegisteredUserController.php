<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\StudentRegistration;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'alpha', 'max:255'],
            'last_name' => ['required', 'string', 'alpha', 'max:255'],
            'user_name' => ['required', 'string', 'regex:/^[A-Za-z0-9_]+$/', 'unique:users'],
            'dob' => ['required', 'date_format:Y-m-d', 'after_or_equal:2002-01-01', 'before_or_equal:2007-01-01'],
            'nic' => ['required', 'min:10', 'max:12', 'string', 'regex:/^[A-Za-z0-9_]+$/'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'dob' => $request->dob,
            'nic' => $request->nic,
            'user_name' => Str::lower($request->user_name),
            'password' => Hash::make($request->password),
        ]);

        $user->assignRole('student');

        event(new Registered($user));

        Auth::login($user);

        /** @var User $program */
        $admins = User::role('admin')->get();

        foreach ($admins as $admin) {
            $admin->notify(new StudentRegistration($admin));
        }

        return redirect(RouteServiceProvider::HOME);
    }
}
