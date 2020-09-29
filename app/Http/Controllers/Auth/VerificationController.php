<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\EmailVerification;
use Carbon\Carbon;
use App\User;
use Str;
use Auth;
use Dirape\Token\Token;
use Illuminate\Support\Facades\Mail;

class VerificationController extends Controller
{

    public function verify($token)
    {
        $data = EmailVerification::where('token', $token)->first();

        if(!$data) return redirect('/')->with('error', '');

        $user = User::where('id', $data->userId)->first();

        if(!$user)
            return redirect('/')->with('error', 'Unable to locate the user. !');

        if($user->email_verified_at != NULL)
            return redirect('/')->with('error', 'This user is already verified !');

        if(Carbon::parse($data->created_at)->addMinutes(15)->isPast())
            return redirect('/')->with('error', 'The verification has expired');

        $user->email_verified_at = Carbon::now();
        $user->save();

        return redirect('/')->with('success', 'The email has been verified');

    }

    public function resend()
    {
        $user = User::where('id', Auth::user()->id)->first();

        if(!$user)
            return redirect('/')->with('error', 'Unable to locate the user. !');

        if($user->email_verified_at != NULL)
            return redirect('/')->with('error', 'This user is already verified !');

        $emailverif = EmailVerification::create([
            'userId' => $user->id,
            'token' => Str::random(32)
        ]);
    
        $data = array(
            'url' => route('verification.email', [ 'token' => $emailverif->token ])
        );
    
        Mail::send('emails.verify_email', $data, function($m) use ($user) {
            $m->from('no-reply@cloner.xyz', 'Cloner.Tech');
            
            $m->to($user->email, $user->pseudo)->subject('Check your e-mail address !');
        });
        
        return redirect()->back()->with('success', 'An e-mail was sent to you !');

    }

}
