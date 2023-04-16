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
            return view('pages.homeView');
        }elseif($role == "admin"){
            return view('pages.homeView');
        }elseif($role == "user"){
            return view('pages.homeView');
        }else{
            return view('pages.homeView');
        }
    }
}
