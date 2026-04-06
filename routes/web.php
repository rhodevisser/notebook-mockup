<?php

use Illuminate\Support\Facades\Route;
use App\Models\Idea;

Route::get('/', function () {

    $ideas = Idea::all();

    return view('ideas', [
        'ideas' => $ideas,
    ]);
});

Route::post('/ideas', function () {
   Idea::create([
        'description' => request('idea'),
        'state' => 'pending...',
    ]);

    return redirect('/');
});

// Temporary until we talk about delete req
Route::get('/delete-ideas', function () {
    session()->forget('ideas');
    return redirect('/');
});


