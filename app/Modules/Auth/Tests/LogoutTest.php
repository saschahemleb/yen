<?php

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Yen\Models\User;

uses(DatabaseMigrations::class);

it('logs out a user', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    $response = $this->get('/auth/logout');

    $this->assertGuest();
    $response->assertStatus(302);
    $response->assertRedirect('/');
});
