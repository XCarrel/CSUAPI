<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * get an API token, providing a valid password hash
     */
    public function getToken(Request $request) {
        $user = User::where('initials',$request->input('initials'))->first();
        if (password_verify($request->input('password'), $user->password)) {
            if (!$user->token) {
                $user->token = Str::random(60);
                $user->save();
            }
            return json_encode(['token' => $user->token]);
        } else {
            return response('Invalid credentials',401);
        }
    }
}
