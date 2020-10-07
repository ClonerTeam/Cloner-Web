<?php

namespace App\Http\Controllers\Clonage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Servers;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        $server = Servers::inRandomOrder()->first();

        if(!$server)
            return redirect('/')->with('error', 'No server is available for cloning sorry !');

        return view('clonage.index', compact('server'));
    }

    public function homeTest()
    {
        $server = Servers::inRandomOrder()->first();

        if(!$server)
            return redirect('/')->with('error', 'No server is available for cloning sorry !');

        return view('clonage.test', compact('server'));
    }

}
