<?php

namespace App\Http\Controllers;

use App\Color;
use App\Services\Color as ColorObject;
use App\Services\ColorHelper;

class PageController extends Controller
{
    public function __construct ( ColorObject $color )
    {
        $this->color = $color;
    }

    public function index ()
    {
        $colors = Color::all();

        if ( $colors->count() % 10 )
        {
            $colors->splice( 0, $colors->count() % 10 );
        }

        $colors = $colors->reverse();

        $themeC = $colors->random();

        if ( env('NEW_COLOR_ON_INDEX_LOAD') )
        {
            $model = $this->color->toModel();
            $model->save();
        }

        return view('index')->with(
        [
            'colors' => $colors,
            'themeC' => $themeC
        ]);
    }

}
