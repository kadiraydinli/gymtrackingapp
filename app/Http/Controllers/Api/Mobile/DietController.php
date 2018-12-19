<?php

namespace App\Http\Controllers\Api\Mobile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Diet;

class DietController extends Controller
{
    public function index()
    {
        $diets = Diet::where('user_id', auth()->user()->id)->get();
        $diets2 = Diet::where('user_id', auth()->user()->id)->first();

        $interval = now()->diff($diets2->start_date);
        $diets->kalan = $interval->format('%a') + 1;

        foreach ($diets as $diet) {
            $diet->kalan = $interval->format('%a') + 1;
        }


        return response()->json(/*['diet' => */$diets/*, 'kalan' => ($interval->format('%a') + 1)]*/ );
    }

    public function control($id)
    {
        $diet = Diet::find($id);
        $diet->control = true;
        $diet->save();

        return response()->json(true);
    }
}
