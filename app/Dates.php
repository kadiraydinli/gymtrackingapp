<?php

namespace App;

use App\ModelCustom;

class Dates extends ModelCustom
{
    protected $table = 'dates';

    protected $fillable = [
        'user_id', 'start_date', 'end_date'
    ];

    protected $dates = [
        'start_date', 'end_date', 'added_at', 'updated_at'
    ];

    protected $casts = [
        'start_date' => 'datetime:d/m/Y',
        'end_date' => 'datetime:d/m/Y',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id'); //birden çok
    }
}
