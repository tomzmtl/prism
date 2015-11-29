<?php

namespace App\Http\Controllers;

use App\Color;

class PageController extends Controller
{

    public function index ()
    {
        $colors = Color::all();

        return view('index')->with(compact('colors'));
    }

}
