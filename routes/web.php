<?php

use Illuminate\Support\Facades\Route;
use App\Models\MarvelCharacter;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/characters', [\App\Http\Controllers\MarvelCharacterController::class, 'getAllHeroes']);
Route::get('/characters/{id}', [\App\Http\Controllers\MarvelCharacterController::class, 'getHeroById']);
