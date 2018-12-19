<?php

namespace App;

use App\ModelCustom;

class HazirDiet extends ModelCustom
{
    protected $table = 'hazir_diet';

    protected $fillable = [
        'type', 'meal', 'content', 'time'
    ];
}
