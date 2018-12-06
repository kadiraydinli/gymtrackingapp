<?php

namespace App;

use App\ModelCustom;

class UserExercise extends ModelCustom
{
    protected $table = 'user_exercise';

    protected $fillable = [
        'exercise_id', 'user_id', 'exercise_day', 'control', 'sets', 'reps'
    ];
}
