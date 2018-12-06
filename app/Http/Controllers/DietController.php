<?php

namespace App\Http\Controllers;

use App\Diet;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request;

class DietController extends Controller
{
    public function index()
    {

    }

    public function ekle(Request $request)
    {
        Diet::add([
            'day' => $request->day,
            'meal' => $request->meal,
            'user_id' => $request->user_id
        ]);
        return response()->json(['durum' => true]);
    }
}
