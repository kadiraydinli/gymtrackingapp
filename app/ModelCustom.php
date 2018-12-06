<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelCustom extends Model
{
    public static function add($array = [])
    {
        $foobar = new static;  // correct
        $fill = $foobar->fillable;
        $drop = array_except($array, $fill);
        $filtered = array_except($array, array_keys($drop));
        $filtered = array_add($filtered, 'added_at', now());
        $filtered = array_add($filtered, 'updated_at', now());
        $id = static::insertGetId($filtered);
        return static::findOrFail($id);
    }

    protected $dates = [
        'added_at', 'updated_at'
    ];

    protected $hidden = [
        'added_at', 'updated_at'
    ];
}
