<?php

namespace App\Http\Controllers\Api\Desktop;

use App\Exercise;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExerciseController extends Controller
{
    public function index()
    {

    }

    public function ekle(Request $request)
    {
        Exercise::add([
            'exercise_id' => $request->exercise_id,
            'user_id' => $request->user_id,
            'exercise_day' => $request->exercise_day
        ]);
        return response()->json(['durum' => true]);
    }

    public function sil($id)
    {
        $exercise = Exercise::find($id);
        $exercise->delete();
        return response()->json(['durum' => true]);
    }
}
