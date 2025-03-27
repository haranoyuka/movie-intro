<?php

namespace App\Http\Controllers\Alice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    public function add()
    {
        return view('alice.movie.create');
    }
    public function create(Request $request)
    {
        return redirect('alice/movie/create');
    }
    
    public function academy()
    {
        return redirect('alice/movie/academy');
    }

    public function ranking()
    {
        return redirect('alice/movie/ranking');
    }
}
