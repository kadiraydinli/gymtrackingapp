<?php

namespace App\Http\Controllers\Api\Desktop;

use App\Diet;
use App\HazirDiet;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Controller;
//use GuzzleHttp\Psr7\Request;

class DietController extends Controller
{
    public function index($id)
    {
        $userDiet = Diet::where('user_id', $id)->get();
        return response()->json($userDiet);
    }

    public function ekle(Request $request)
    {
        if ($request->ctrl == "1") {
            $userDiet = Diet::where('user_id', $request->user_id);
            $userDiet->delete();
        }

        Diet::add([
            'user_id' => $request->user_id,
            'type' => $request->type,
            'meal' => $request->meal,
            'content' => $request->content,
            'time' => $request->time,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);
        return response()->json(['durum' => true]);
    }

    /*public function guncelle(Request $request, $id)
    {
        $user = Diet::find($id);
        $user->type = $request->type;
        $user->meal = $request->meal;
        $user->content = $request->content;
        $user->time = $request->time;
        $user->start_date = $request->start_date;
        $user->end_date = $request->end_date;
        return response()->json(['durum' => true]);
    }*/

    public function sil($id)
    {
        $diet = Diet::find($id);
        $diet->delete();
        return response()->json(['durum' => true]);
    }

    public function getType($name)
    {
        $type = HazirDiet::where('type', $name)->get();
        return response()->json($type);
    }
}
