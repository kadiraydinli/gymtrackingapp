<?php

namespace App\Http\Controllers\Api\Mobile;

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
}
