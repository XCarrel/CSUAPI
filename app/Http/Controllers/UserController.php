<?php

namespace App\Http\Controllers;

use App\Http\Resources\DrugsheetResource;
use App\Http\Resources\ShiftactionResource;
use App\Http\Resources\ShiftsheetResource;
use App\Models\Drugsheet;
use App\Models\Shiftsheet;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * get an API token, providing a valid password hash
     */
    public function getToken(Request $request)
    {
        if (env('APP_DEBUG')) Log::info(__METHOD__);
        // don't know why, but React sends arrays in inputs
        extract($request->input('initials')); // $initials
        extract($request->input('password')); // $password
        $user = User::where('initials', $initials)->first();
        if ($user) {
            if (password_verify($password, $user->password)) {
                if (!$user->api_token) { // generate a new token
                    $user->api_token = Str::random(60);
                    $user->save();
                }
                return json_encode(['token' => $user->api_token]); // Login success
            } else {
                return response('Invalid credentials', 401); // bad password
            }
        } else {
            return response('Invalid credentials', 401); // bad usernamre
        }
    }

    public function myReports(Request $request)
    {
        return [
            "shift" => ShiftsheetResource::collection(Shiftsheet::employing(Auth::user())),
            "drug" => DrugsheetResource::collection(Drugsheet::filledBy(Auth::user()))
        ];
    }

    public function myActionsInShiftReport($id)
    {
        $sheet = Shiftsheet::find($id);
        if (!$sheet) return response ('Unknown report',404);
        return ShiftactionResource::collection($sheet->myActions());
    }
}
