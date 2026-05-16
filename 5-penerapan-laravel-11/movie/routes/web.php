<?php

use App\Http\Middleware\CheckMembership;
use App\Http\Controllers\MovieController;
use App\Http\Middleware\IsAuth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'movie'], function () {
    // GET all movies
    Route::get('/', [MovieController::class, 'index']);

    // GET movie by ID
    Route::get('/{id}', [MovieController::class, 'show']);
});
