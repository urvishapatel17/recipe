<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function index()
    {
        $role = \Auth::user()->rb_user_role;
        //echo $role; exit; 
        if($role == 'admin'){

            return view('admin/home');    
        } else {

            return view('home');            
        }
        
    }
}
