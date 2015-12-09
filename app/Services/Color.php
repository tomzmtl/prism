<?php

namespace App\Services;

use App\Color as ColorModel;

class Color
{

    private $red   = 0;
    private $green = 0;
    private $blue  = 0;


    public function __construct ( ColorHelper $helper )
    {
        $this->helper = $helper;

        $this->red   = $this->helper->generateNumber();
        $this->green = $this->helper->generateNumber();
        $this->blue  = $this->helper->generateNumber();
    }

    public function toResponse ()
    {
        $hsl = $this->helper->rgbToHsl($this->red,$this->green,$this->blue);
        $reverse = $this->helper->rgbToReverse($this->red,$this->green,$this->blue);

        return [
            'rgb' =>
            [
                'r' => $this->red,
                'g' => $this->green,
                'b' => $this->blue
            ],

            'hsl' =>
            [
                'h' => $hsl[0],
                's' => $hsl[1],
                'l' => $hsl[2]
            ]
        ];
    }

    public function toModel ()
    {
        $model = new ColorModel;

        $model->red = $this->red;
        $model->green = $this->green;
        $model->blue = $this->blue;

        return $model;
    }

}
