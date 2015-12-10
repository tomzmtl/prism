<?php

namespace App\Http\Controllers;

use App\Color;
use App\Color\Rgb;

class PageController extends Controller
{

    public function index ()
    {
        $colors = Color::all();

        if ( $colors->count() % 10 )
        {
            $colors->splice( 0, $colors->count() % 10 );
        }

        $c = $colors->random();
        $themeColor = new Rgb($c->red,$c->green,$c->blue);


        if ( env('NEW_COLOR_ON_INDEX_LOAD') )
        {
            $rgb = new Rgb();
            $rgb->randomize()->toModel()->save();
        }

        return view('index')->with(
        [
            'colors' => $colors,
            'themeC' => $themeColor
        ]);
    }

}
