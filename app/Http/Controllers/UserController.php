<?php

namespace App\Http\Controllers;

use App\Http\Resources\DrugsheetResource;
use App\Http\Resources\ShiftactionResource;
use App\Http\Resources\ShiftsheetResource;
use App\Models\Apitoken;
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
        $initials = $request->input('initials');
        $password = $request->input('password');
        $user = User::where('initials', $initials)->first();
        if ($user) {
            if (password_verify($password, $user->password)) {
                if (!$user->token) { // generate a new token
                    $tok = new Apitoken();
                    $tok->token = Str::random(60);
                    $tok->owner()->associate($user);
                    $tok->save();
                    return json_encode(['token' => $tok->token]); // Login success
                }
                return json_encode(['token' => $user->token->token]); // Login success
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
