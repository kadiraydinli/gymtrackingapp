<?php

namespace App\Http\Controllers\Api\Mobile;

use Auth;
use App\User;
use App\Dates;
use App\Diet;
use App\UserExercise;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $a = Dates::where('user_id', $user->id)->get();

        if (!empty(Dates::where('user_id', $user->id)->get())) {

            $dates = Dates::where('user_id', $user->id)
                ->orderBy('added_at', 'desc')
                ->first();
            $user->start_date = $dates->start_date->format('d/m/Y');
            $user->end_date = $dates->end_date->format('d/m/Y');

            if (strtotime(now()) < strtotime($dates->end_date)) {
                $interval = now()->diff($dates->end_date);
                $user->days = $interval->format('%a') + 1;
            } else {
                $user->days = 0;
            }
        }

        return response()->json($user);
    }

    public function kalan()
    {
        $user = Auth::user();

        $dates = Dates::where('user_id', $user->id)
            ->orderBy('added_at', 'desc')
            ->first();

        $interval = now()->diff($dates->end_date);
        $gidecek['user'] = $interval->format('%a') + 1;

        $diets = Diet::where('user_id', $user->id)->first();
        $interval = now()->diff($diets->start_date);
        $gidecek['diet'] = $interval->format('%a') + 1;


        $exercise = UserExercise::where('user_id', auth()->user()->id)
            ->orderBy('exercise_day', 'asc')
            ->where('control', "0")->first();
        if ($exercise == null) {
            $gidecek['exercise'] = 0;
        } else {
            $gidecek['exercise'] = $exercise->exercise_day;
        }

        return response()->json($gidecek);
    }
}
