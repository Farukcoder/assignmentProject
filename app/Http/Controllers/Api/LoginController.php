<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class LoginController extends Controller
{
    public $successStatus = 200;

    public function loginApi(Request $request)
    {

        $this->validate($request, [
            "username" => "required",
            "password" => "required"
        ]);

        $user = User::where("username", $request->username)->first();

        // if not found this user
        if (empty($user)) {
            return response()->json(['message' => 'Sorry please registration','data' => $user]);
        }

        if (Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'User login successfully', 'data' => $user]);
        } else {
            return response()->json(['message' => 'Sorry please registration','data' => $user]);
        }
    }
}
