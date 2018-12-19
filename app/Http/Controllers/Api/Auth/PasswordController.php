<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\PasswordReset;
use App\User;
use Auth;
use Hash;

class PasswordController extends Controller
{
    public function change(Request $request)
    {
        $this->validate($request, [
            'oldPassword' => 'required',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|min:6|same:password'
        ]);

        $user = Auth::user();

        if (Hash::check($request->oldPassword, $user->password)) {
            $user->password = bcrypt($request->password);
            $user->save();

            return response()->json(true);

        } else {
            return response()->json([
                'message' => 'Dikkat!',
                'errors' => [
                    'password' => 'Eski şifreniz yanlış.'
                ]
            ], 422);
        }

        return response()->json([
            'message' => 'Bir sorun var!',
            'errors' => [
                'password' => 'Lütfen daha sonra tekrar deneyiniz.'
            ]
        ], 422);
    }

    public function reset(Request $request)
    {
        try {
            $password = str_random(6);
            $user = User::where('email', $request->email)->first();
            $user->password = bcrypt($password);
            $user->save();

            $user->notify(new PasswordReset($user->email, $password));

            return response()->json(true);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'There is a problem!',
                'errors' => [
                    'password' => 'Bir hata oluştu.'
                ]
            ], 422);
        }

    }
}
