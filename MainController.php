<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showModel()
    {
        return view('model');
    }

    public function showAbout()
    {
        return view('about');
    }

    public function showDeAp11()
    {
        return view('details/apollo-11');
    }
}