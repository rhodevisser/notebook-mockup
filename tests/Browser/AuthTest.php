<?php

//it('returns a successful response', function () {
//    visit('/')->assertSee('Welcome')->debug();
//});

use App\Models\User;

it('registers a user', function () {
    visit('/register')
        ->fill('name', 'Jane Doe')
        ->fill('email', 'jane@example')
        ->fill('password', 'password')
        ->press('@register-button')
        ->assertPathIs('/ideas');

    expect(User::where('email', 'jane@example')->exists())->toBe(true);
    $this->assertAuthenticated();
});
