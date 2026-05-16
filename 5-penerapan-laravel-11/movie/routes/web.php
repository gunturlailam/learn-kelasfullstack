<?php

use App\Http\Middleware\CheckMembership;
use App\Http\Controllers\MovieController;
use App\Http\Middleware\IsAuth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

$movies = [];


// Public route untuk /movie
Route::get('/movie', [MovieController::class, 'show']);

Route::group(
    [
        'middleware' => ['isAuth'],
        'prefix' => 'admin',
        'as' => 'movie.'
    ],
    function () use ($movies) {
        Route::get('/', [MovieController::class, 'index'])->name('index');

        Route::get('/movie/{id}', function ($id) use ($movies) {
            return $movies[$id];
        })->middleware('isAuth', 'isMember');

        Route::post('/movie', function () use ($movies) {
            $movies[] = [
                'title' => request('title'),
                'year' => request('year'),
                'genre' => request('genre'),
            ];

            return $movies;
        });

        Route::put('/movie/{id}', function ($id) use ($movies) {
            $movies[$id]['title'] = request('title');
            $movies[$id]['year'] = request('year');
            $movies[$id]['genre'] = request('genre');

            return $movies;
        });

        Route::patch('/movie/{id}', function ($id) use ($movies) {
            $movies[$id]['title'] = request('title');
            $movies[$id]['year'] = request('year');
            $movies[$id]['genre'] = request('genre');

            return $movies;
        });

        Route::delete('/movie/{id}', function ($id) use ($movies) {
            unset($movies[$id]);

            return $movies;
        });

        Route::get('pricing', function () {
            return 'Please, buy a membership';
        });

        Route::get('/login', function () {
            return 'Login Page';
        })->name('login');
    }
);
