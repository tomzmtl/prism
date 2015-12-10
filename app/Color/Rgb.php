<?php

namespace App\Color;

use App\Color;

class Rgb
{
    public $r = null;
    public $g = null;
    public $b = null;

    public function __construct ( $r = 0, $g = 0, $b = 0 )
    {
        $this->r = $r;
        $this->g = $g;
        $this->b = $b;
    }

    public function randomize ()
    {
        $this->r = rand(0,255);
        $this->g = rand(0,255);
        $this->b = rand(0,255);

        return $this;
    }

    public function lightness ()
    {
        $c1 = $this->r * $this->r * 0.241;
        $c2 = $this->g * $this->g * 0.691;
        $c3 = $this->b * $this->b * 0.068;

        return (int) sqrt( $c1 + $c2 + $c3 );
    }

    public function toResponse ()
    {
        return [
            'rgb' =>
            [
                'r' => $this->r,
                'g' => $this->g,
                'b' => $this->b
            ]
        ];
    }

    public function toModel ()
    {
        $model = new Color;

        $model->red = $this->r;
        $model->green = $this->g;
        $model->blue = $this->b;

        return $model;
    }

}