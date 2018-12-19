<?php

namespace App\Http\Controllers\Api\Desktop;

use App\UserExercise;
use App\Exercise;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExerciseController extends Controller
{
    public function index($id)
    {
        $exercises = UserExercise::where('user_id', $id)->get();
        foreach ($exercises as $exercise) {
            $exercise->exercise_name = Exercise::find($exercise->exercise_id)->exercise_name;
            $exercise->region = Exercise::find($exercise->exercise_id)->region;
        }
        return response()->json($exercises);
    }

    /*public function index($id)
    {
        $exercises = UserExercise::where('user_id', $id)->with('exercise')->get();

        return response()->json($exercises);
    }*/

    public function ekle(Request $request)
    {
        UserExercise::add([
            'exercise_id' => $request->exercise_id,
            'user_id' => $request->user_id,
            'exercise_day' => $request->exercise_day,
            'sets' => $request->sets,
            'reps' => $request->reps
        ]);
        return response()->json(['durum' => true]);
    }

    public function guncelle(Request $request, $id)
    {
        $exe = UserExercise::find($id);
        $exe->exercise_id = $request->exercise_id;
        $exe->exercise_day = $request->exercise_day;
        $exe->user_id = $request->user_id;
        $exe->sets = $request->sets;
        $exe->reps = $request->reps;

        $exe->save();

        return response()->json(['durum' => true]);
    }

    public function sil($id)
    {
        $exercise = UserExercise::find($id);
        $exercise->delete();
        return response()->json(['durum' => true]);
    }

    public function bolgeCek($bolge)
    {
        $user = Exercise::where('region', $bolge)->get();
        return response()->json($user);
    }

    public function hareketCek($hareket)
    {
        $user = Exercise::where('exercise_name', $hareket)->get();
        return response()->json($user);
    }
}
