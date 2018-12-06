<?php

namespace App\Http\Controllers;

use App\Exercise;
use Illuminate\Http\Request;

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
}
