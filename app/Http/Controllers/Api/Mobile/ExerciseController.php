<?php

namespace App\Http\Controllers\Api\Mobile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UserExercise;
use App\Exercise;
use DB;



class ExerciseController extends Controller
{
    public function index()
    {

    }

    public function cek()
    {
        $day = UserExercise::where('user_id', auth()->user()->id)
            ->orderBy('exercise_day', 'asc')
            ->where('control', "0")->first();

        if ($day) {
            $exercises = UserExercise::where('user_id', auth()->user()->id)
                ->where('exercise_day', $day->exercise_day)
                ->where('control', "0")
                ->with('exercise')->get();
            return response()->json($exercises);
        } else {
            return response()->json(false);
        }//buraya bak
    }

    public function control($id, $day)
    {
        DB::table('user_exercise')->where('user_id', $id)->where('exercise_day', $day)->update(['control' => 1]);

        return response()->json(true);
    }
}
