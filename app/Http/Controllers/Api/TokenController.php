<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Servers;
use App\Tokens;

class TokenController extends Controller
{
    public function get(Request $request)
    {
        $server = Servers::where('key', $request->daemon_key)->firstOrFail();
        $countToken = Tokens::all()->count();

        if($countToken > 0) {
            return Tokens::inRandomOrder()->first()->token;
        } else {
            return "";
        }
    }
}
