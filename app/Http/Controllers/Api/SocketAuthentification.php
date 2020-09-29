<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use App\Servers;

class SocketAuthentification extends Controller
{
    public function auth(Request $request)
    {
        $server = Servers::where('key', $request->daemon_key)->firstOrFail();
        $user = User::where([ 'token_id' => $request->token_id, 'token_key' => $request->token_key ])->firstOrFail();

        return "true";
    }
}
