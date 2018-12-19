<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone_number', 'admin', 'password'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    //protected $hidden = ['admin', '1'];

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

    public function userExercise()
    {
        return $this->hasMany('App\UserExercise', 'user_id', 'id');
    }

    public function dates()
    {
        return $this->hasMany('App\Dates', 'user_id', 'id');
    }
}
