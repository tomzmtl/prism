<?php

namespace App\Http\Controllers;

use App\Color;

class PageController extends Controller
{
    public function __construct ( Color $color )
    {
        $this->color = $color;
    }

    public function index ()
    {
        $colors = Color::all()->reverse();

        return view('index')->with(compact('colors'));
    }

}
