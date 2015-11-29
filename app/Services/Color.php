<?php

namespace App\Services;

class Color
{

    private $red   = 0;
    private $green = 0;
    private $blue  = 0;


    public function create ()
    {
        $this->red   = rand(0,255);
        $this->green = rand(0,255);
        $this->blue  = rand(0,255);

        return $this;
    }

    public function toResponse ()
    {
        $hsl = ColorHelper::rgbToHsl($this->red,$this->green,$this->blue);

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

    public function red ()
    {
        return $this->red;
    }

    public function green ()
    {
        return $this->green;
    }

    public function blue ()
    {
        return $this->blue;
    }


}
