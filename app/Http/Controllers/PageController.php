<?php

namespace App\Http\Controllers;

use App\Services\Color;
use App\Color as ColorModel;

class PageController extends Controller
{
    public function __construct ( Color $color )
    {
        $this->color = $color;
    }

    public function index ()
    {
        $model = $this->color->toModel();
        $model->save();

        $colors = ColorModel::all();

        return view('index')->with(compact('colors'));
    }

}
