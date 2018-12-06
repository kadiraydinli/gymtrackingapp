<?php

namespace App\Http\Controllers\Api\Desktop;

use App\Diet;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Controller;
//use GuzzleHttp\Psr7\Request;

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

    public function guncelle(Request $request, $id)
    {
        $user = Diet::find($id);
        //$diet->
        return response()->json(['durum' => true]);
    }

    public function sil($id)
    {
        $diet = Diet::find($id);
        $diet->delete();
        return response()->json(['durum' => true]);
    }
}
