<?php

namespace Yen\Modules\Auth\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Yen\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth::login');
    }

    public function store(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => __('These credentials do not match our records.'),
            ]);
        }

        $request->session()->regenerate();

        return to_route('app::dashboard');
    }
}
