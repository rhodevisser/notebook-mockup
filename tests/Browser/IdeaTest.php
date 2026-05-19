<?php

use App\Models\User;

it('shows all ideas', function () {
    // given I'm signed in
    $this->actingAs($user = User::factory()->create());

    // And I have an idea in de DB
    $user->ideas()->create([
        'description' => 'Build a test',
    ]);
    // When I visit /ideas
    visit('/ideas')
        ->assertSee('Build a test');

    // Then I should see my one idea
});

it('shows a single idea', function () {

});

it('shows an edit form to update an idea', function () {

});
