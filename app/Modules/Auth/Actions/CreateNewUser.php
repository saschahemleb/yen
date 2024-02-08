<?php

namespace Yen\Modules\Auth\Actions;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Yen\Models\User;
use Yen\Modules\Auth\Events\UserRegistered;

class CreateNewUser
{
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', Password::defaults()],
        ])->validate();

        return tap(User::query()->create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]), function ($user) {
            UserRegistered::dispatch($user);
        });
    }
}
