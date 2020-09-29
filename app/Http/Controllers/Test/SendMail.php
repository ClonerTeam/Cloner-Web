<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SendMail extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function submit($email)
    {
        if(Auth::user()->id == 2) {
            try {

                $data = array(
                    'url' => 'https://google.com/'
                );
    
                Mail::send('emails.test', $data, function($m) use ($email) {
                    $m->from('no-reply@cloner.xyz', 'Cloner.Tech');
                
                    $m->to($email, "Test")->subject('Ceci est bien un test !');
                });
    
                return "Le mail a bien été envoyer";
    
            } catch(Exception $e) {
                return "Impossible d'envoyer le mail. " . $e;
            }
        } else {
            return "Vous n'avez pas accès !";
        }
    }
}
