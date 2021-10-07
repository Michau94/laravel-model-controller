<?php

namespace App\Http\Controllers;



use App\Movie;

class HomeController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('home', compact('movies'));
    }

    public function show($id)
    {

        $movie = Movie::findOrFail($id);

        return view('show', compact('movie'));
    }
}
