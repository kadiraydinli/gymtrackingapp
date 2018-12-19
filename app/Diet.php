<?php

namespace App;

use App\ModelCustom;

class Diet extends ModelCustom
{
    protected $table = 'diet';

    protected $fillable = [
        'user_id', 'type', 'meal', 'content', 'time', 'control', 'start_date', 'end_date'
    ];

    protected $dates = [
        'start_date', 'end_date', 'added_at', 'updated_at'
    ];

    protected $casts = [
        'start_date' => 'datetime:d/m/Y',
        'end_date' => 'datetime:d/m/Y',
    ];
}
