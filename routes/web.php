<?php

use App\Http\Controllers\Auth\LogOutController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;

Route::get('/ideas', [IdeaController::class, 'index']);
Route::get('/ideas/create', [IdeaController::class, 'create']);
Route::post('/ideas', [IdeaController::class, 'store']);
Route::get('/ideas/{idea}', [IdeaController::class, 'show']);
Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit']);
Route::patch('/ideas/{idea}', [IdeaController::class, 'update']);
Route::delete('/ideas/{idea}', [IdeaController::class, 'destroy']);

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post( '/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [LogOutController::class, 'create']);
Route::post('/login', [LogOutController::class, 'store']);
Route::delete('/logout', [LogOutController::class, 'destroy']);

