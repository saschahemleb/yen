<?php

namespace Yen\Modules\Auth\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yen\Modules\Auth\Actions\CreateNewUser;

class RegisterController
{
    public function create()
    {
        return view('auth::register');
    }

    public function store(Request $request, CreateNewUser $createNewUser)
    {
        $user = $createNewUser->create($request->validate([
            'name' => [],
            'email' => [],
            'password' => ['confirmed'],
        ]));

        Auth::login($user);

        return to_route('app::dashboard');
    }
}
