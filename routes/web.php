<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $ideas = session()->get('ideas', []);

    return view('ideas', [
        'ideas' => $ideas,
    ]);
});

Route::post('/ideas', function () {
    $idea = request("idea");

    session()->push('ideas', $idea);

    return redirect('/');
});

// Temporary until we talk about delete req
Route::get('/delete-ideas', function () {
    session()->forget('ideas');
    return redirect('/');
});


