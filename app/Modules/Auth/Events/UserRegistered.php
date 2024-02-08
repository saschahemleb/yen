<?php

namespace Yen\Modules\Auth\Events;

use Yen\Events\Event;
use Yen\Models\User;

class UserRegistered extends Event
{
    public function __construct(public readonly User $user) {}
}
