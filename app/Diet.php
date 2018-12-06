<?php

namespace App;

use App\ModelCustom;

class Diet extends ModelCustom
{
    protected $table = 'diet';

    protected $fillable = [
        'day', 'meal', 'user_id', 'control'
    ];
}
