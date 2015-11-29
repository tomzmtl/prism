<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = 'generated';

    protected $fillable =
    [
        'red', 'green', 'blue'
    ];
}