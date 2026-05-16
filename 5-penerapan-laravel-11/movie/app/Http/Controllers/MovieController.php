<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public $movies;

    public function __construct()
    {
        for ($i = 0; $i < 10; $i++) {
            $this->movies[] = [
                'id' => $i,
                'title' => 'Movie ' . $i,
                'year' => '2022',
                'genre' => 'Action',
            ];
        }
    }

    // GET semua movies
    public function index()
    {
        return $this->movies;
    }

    // GET movie berdasarkan ID
    public function show($id)
    {
        return $this->movies[$id] ?? ['error' => 'Movie tidak ditemukan'];
    }
}
