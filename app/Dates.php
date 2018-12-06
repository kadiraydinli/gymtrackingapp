<?php

namespace App;

use App\ModelCustom;

class Dates extends ModelCustom
{
    protected $table = 'dates';

    protected $fillable = [
        'user_id', 'start_date', 'end_date'
    ];
}
