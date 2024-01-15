<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $movie=Movie::all();
        // dd($movie);
        return view('welcome', compact('movie'));
    }
}
