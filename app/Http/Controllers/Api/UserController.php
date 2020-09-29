<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\GuildData;

class UserController extends Controller
{

    public function stat() {
        $userCount = User::all()->count();
        return $userCount;
    }

    public function exist(Request $request) {
        if($request->userId) {
            $user = User::where('discord_id', $request->userId)->first();

            if(!$user) return "false";

            return "true";
        } else {
            return "error";
        }
    }

    public function guildList(Request $request) {
        if($request->userId && $request->apiKey) {
            if($request->apiKey != "7U5PhJn4u") return json_encode(array( 'success' => false ));

            $user = User::where('discord_id', $request->userId)->first();
            if(!$user) return json_encode(array( 'success' => false ));

            $guildsData = GuildData::where('userId', $user->id)->get();

            return json_encode(array( 'success' => true, 'guildData' => $guildsData ));
        } else {
            return json_encode(array( 'success' => false ));
        }
    }

}
