<?php

namespace Yen\Modules\Auth\Console\Commands;

use Yen\Console\Commands\Command;
use Yen\Modules\Auth\Actions\CreateNewUser;

class CreateUserCommand extends Command
{
    protected $signature = 'auth:create-user';

    protected $description = 'Create a new user';

    public function handle(): void
    {
        $name = $this->ask('Name');
        $email = $this->ask('E-Mail');
        $password = $this->secret('Password');
        $passwordConfirmation = $this->secret('Confirm the password');
        if ($password !== $passwordConfirmation) {
            throw new \RuntimeException('Password confirmation was wrong');
        }

        app(CreateNewUser::class)->create(compact('name', 'email', 'password'));
    }
}
