<?php

namespace App\Http\Controllers;

use App\Color;
use App\Services\ColorHelper;

class PageController extends Controller
{
    public function __construct ( Color $color )
    {
        $this->color = $color;
    }

    public function index ()
    {
        $colors = Color::all()->reverse();

        $themeC = $colors->random();

        return view('index')->with(
        [
            'colors' => $colors,
            'themeC' => $themeC
        ]);
    }

}
