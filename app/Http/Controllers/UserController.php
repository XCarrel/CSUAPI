<?php

namespace App\Http\Controllers;

use App\Http\Resources\ShiftsheetResource;
use App\Models\Shiftsheet;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * get an API token, providing a valid password hash
     */
    public function getToken(Request $request) {
        if (env('APP_DEBUG')) Log::info(__METHOD__);
        // don't know why, but React sends arrays in inputs
        extract($request->input('initials')); // $initials
        extract($request->input('password')); // $password
        $user = User::where('initials',$initials)->first();
        if ($user) {
            if (password_verify($password, $user->password)) {
                if (!$user->token) { // generate a new token
                    $user->token = Str::random(60);
                    $user->save();
                }
                return json_encode(['token' => $user->token]); // Login success
            } else {
                return response('Invalid credentials',401); // bad password
            }
        } else {
            return response('Invalid credentials',401); // bad usernamre
        }
    }

    public function myReports(Request $request) {
        $token = substr($request->header('Authorization'),strlen('Bearer '));
        $user = User::where('token',$token)->first();
        if (!$user) return response('Invalid token',401);
        $shifts = ShiftsheetResource::collection(
            Shiftsheet::where('dayboss_id',$user->id)
            ->orWhere('nightboss_id',$user->id)
            ->orWhere('dayteammate_id',$user->id)
            ->orWhere('nightteammate_id',$user->id)->get());
        return $shifts;
    }
}
