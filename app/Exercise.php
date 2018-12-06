<?php

namespace App;

use App\ModelCustom;

class Exercise extends ModelCustom
{
    protected $table = 'exercise';

    protected $fillable = [
        'exercise_name', 'region', 'explanation', 'image_link'
    ];
}
