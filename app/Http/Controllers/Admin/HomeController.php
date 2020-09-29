<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Dirape\Token\Token;
use Illuminate\Support\Facades\Auth;
use App\Tokens;

class HomeController extends Controller
{
    public function AddTokens()
    {
        return view('admin/add_tokens');
    }

    public function AddTokensRequest(Request $request)
    {
        if(Auth::user()->id == 2 || Auth::user()->id == 4) {
            if($request->has('tokens')) {
                $array = explode(PHP_EOL, $request->tokens);

                foreach($array as $token) {
                    Tokens::create([ 'token' => $token ]);
                }

                return redirect("/admin/tokens")->with('success', 'Vous venez d\'ajouter des tokens !');

            } else {
                return redirect("/admin/tokens")->with('error', 'Veuillez remplir tous les champs.');
            }
        } else {
            return redirect("/");
        }
    }

}
