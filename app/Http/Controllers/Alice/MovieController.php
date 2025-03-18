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
    public function company()
    {
        return redirect('alice/movie/company');
    }

    public function services()
    {
        return view('alice/movie/services');
    }

    public function contact()
    {
        return redirect('alice/movie/contact');
    }
}
