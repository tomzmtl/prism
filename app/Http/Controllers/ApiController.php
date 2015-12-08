<?php

namespace App\Http\Controllers;

use App\Services\Color;

class ApiController extends Controller
{

    public function __construct ( Color $color )
    {
        $this->color = $color;
        header('Access-Control-Allow-Origin: *');
    }

    public function getColor ()
    {
        $model = $this->color->toModel();
        $model->save();

        return response()->json($this->color->toResponse());
    }

}
