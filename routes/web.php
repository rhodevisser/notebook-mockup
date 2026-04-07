<?php

use Illuminate\Support\Facades\Route;
use App\Models\Idea;


 // index
Route::get('/ideas', function () {
    $ideas = Idea::all();

    return view('ideas.index', [
        'ideas' => $ideas,
    ]);
});


// show
Route::get('/ideas/{id}', function ($id) {
    $idea = Idea::find($id);

    return view('ideas.show', [
        'idea' => $idea,
    ]);
});

Route::post('/ideas', function () {
   Idea::create([
        'description' => request('idea'),
        'state' => 'pending',
    ]);

    return redirect('/');
});

// Temporary until we talk about delete req
Route::get('/delete-ideas', function () {
    Idea::truncat();

    return redirect('/ideas');
});


