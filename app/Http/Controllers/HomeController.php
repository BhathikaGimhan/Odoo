<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function redirect(){
        $role=Auth::user()->privilege;
        if($role == "SuperAdmin"){
            return redirect()->route('main');
        }elseif($role == "admin"){
            return redirect()->route('main');
        }elseif($role == "user"){
            return redirect()->route('main');
        }else{
            return redirect()->route('home');
        }
    }
}
