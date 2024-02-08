<?php

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Yen\Models\User;

uses(DatabaseMigrations::class);

it('renders the login screen', function () {
    $response = $this->get('/auth/login');

    $response->assertStatus(200);
});

it('logs in a user', function () {
    $user = User::factory()->create(['password' => $password = 'password']);
    $response = $this->post('/auth/login', [
        'email' => $user->email,
        'password' => $password,
    ]);

    $response->assertStatus(302);
    $this->assertAuthenticated();
    $response->assertRedirect('/app');
});
