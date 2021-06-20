<?php

namespace App\Http\Controllers;

use App\Http\Resources\DrugsheetResource;
use App\Http\Resources\ShiftactionResource;
use App\Http\Resources\ShiftsheetResource;
use App\Models\Drugsheet;
use App\Models\Shiftsheet;
use App\Models\Workplanning;
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

    /**
     * return (API) all workplannings that are not OK, i.e: not responded yet or reported as not OK
     */
    public function myUnconfirmedWorkplans()
    {
        return array_values(Auth::user()->workplans()->with('worktime')->get()->filter(function($wp) {
            return $wp->isUnconfirmed();
        })->all());
        // I used array_values because otherwise, with non-consecutive indices, the return format is altered
    }

    /**
     * Allow mobile app to provide confirmation value
     * @param Request $request (POST)
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function confirmWorkplan(Request $request)
    {
        $wp = Workplanning::find($request->input('id'));
        if (!$wp) return response('Unknown workplan', 400);

        if ($wp->user->id != Auth::user()->id) return response('None of your business', 401);

        $val = intval($request->input('confirmation'));
        if ($val < 0 || $val > 1) return response('Bad value', 400);

        $wp->confirmation = $val;
        $wp->save();

        return response('Ok');
    }
}
