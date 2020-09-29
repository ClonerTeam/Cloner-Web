<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\EmailVerification;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Str;
use Carbon\Carbon;
use Dirape\Token\Token;
use App\Rules\EmailMustHaveTLD;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = "/";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'pseudo' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users', new EmailMustHaveTLD],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'pseudo' => $data['pseudo'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'token_id' => Str::random(64),
            'token_key' => (new Token())->Unique('users', 'token_key', 60)
        ]);

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

        return $user;

    }
}
