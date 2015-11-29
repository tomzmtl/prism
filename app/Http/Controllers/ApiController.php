<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Services\Color;
use App\Color as ColorModel;

class ApiController extends Controller
{

    public function __construct ( Color $color )
    {
        $this->color = $color;
    }

    public function getColor ()
    {
        $color = $this->color->create();

        $log = new ColorModel;

        $log->red = $color->red();
        $log->green = $color->green();
        $log->blue = $color->blue();

        $log->save();

        return response()->json($color->toResponse());
    }

}
