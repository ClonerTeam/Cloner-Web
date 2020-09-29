<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\User;

class DiscordController extends Controller
{
    public function redirectToDiscord()
    {
        if(Auth::check()) {
            return Socialite::driver('discord')->redirect();
        }
        return redirect('login');
    }

    public function handleDiscordCallback()
    {
        if(Auth::check()) {
            try {
                $user = Socialite::driver('discord')->user();
            } catch (\Exception $e) {
                return redirect('/login');
            }

            $cd = User::where('discord_id', $user->id)->first();
            if(!$cd) {
                $existingUser = User::where('id', Auth::user()->id)->first();
                $existingUser->discord_id = $user->id;
                $existingUser->save();

                return redirect('/')->with('success', 'Your Discord account has been linked !');
            } else {
                return redirect('/')->with('error', 'A discord account is already linked to this account !');
            }

        } else {
            return redirect('login');
        }

    }
}