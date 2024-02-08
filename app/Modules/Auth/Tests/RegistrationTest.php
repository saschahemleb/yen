<?php

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Event;
use Yen\Modules\Auth\Events\UserRegistered;

uses(DatabaseMigrations::class);

it('renders the registration screen', function () {
    $response = $this->get('/auth/register');

    $response->assertStatus(200);
});

it('registers a new user', function () {
    Event::fake();

    $response = $this->post('/auth/register', [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
    ]);

    $response->assertStatus(302);
    $this->assertAuthenticated();
    Event::assertDispatched(UserRegistered::class);
    $response->assertRedirect('/app');
});
