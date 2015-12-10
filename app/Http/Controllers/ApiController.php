<?php

namespace App\Http\Controllers;

use App\Color\Rgb;

class ApiController extends Controller
{

    public function __construct ()
    {
        header('Access-Control-Allow-Origin: *');
    }

    public function getColor ()
    {
        $rgb = new Rgb();

        $model = $rgb->randomize()->toModel()->save();

        return response()->json($rgb->toResponse());
    }

}
