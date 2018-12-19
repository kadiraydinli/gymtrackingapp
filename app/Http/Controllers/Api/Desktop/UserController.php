<?php

namespace App\Http\Controllers\Api\Desktop;

use Auth;
use App\User;
use App\Dates;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return response()->json($user);
    }

    public function users()
    {
        $users = User::where('admin', 0)->orderBy('name', 'asc')->get();
        foreach ($users as $user) {

            if (Dates::where('user_id', $user->id)->get()) {
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
        }
        return response()->json($users);
    }

    public function ekle(Request $request)
    {
        $user = User::add([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        Dates::add([
            'user_id' => $user->id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        return response()->json(['durum' => true]);
    }

    public function guncelle(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->phone_number = $request->phone_number;
        $user->email = $request->email;

        $dates = Dates::where('user_id', $user->id)
            ->orderBy('added_at', 'desc')
            ->first();
        $dates->start_date = $request->start_date;
        $dates->end_date = $request->end_date;

        if ($request->password) {
            $user->password = bcrypt($request->password);
        }

        $user->save();
        $dates->save();

        return response()->json(['durum' => true]);
    }

    public function sil($id)
    {
        $user = User::find($id);
        $user->delete();
        return response()->json(['durum' => true]);
    }

    public function cek($id)
    {
        $user = User::find($id)->get();
        return response()->json(['durum' => true]);
    }
}
