<?php

namespace App;

use App\ModelCustom;

class UserExercise extends ModelCustom
{
    protected $table = 'user_exercise';

    protected $fillable = [
        'exercise_id', 'user_id', 'exercise_day', 'sets', 'reps'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id'); //birden çok
    }

    public function exercise()
    {
        return $this->belongsTo('App\Exercise', 'exercise_id', 'id');
    }
}
