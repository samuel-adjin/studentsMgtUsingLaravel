<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate as FacadesGate;

class LoginController extends Controller
{
    //

    public function __construct()
    {
        return  $this->middleware(['guest']);

    }

    public function index()
    {

        return view('entry.login');

    }

    public function store(Request $request)
    {


        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required'
        ]);

       if(!auth()->attempt($request->only('email','password'))){
           return back()->with('warning','Invalid email or password');
       }else{
           if(auth()->user()->isAdmin == 1){
               return view('pages.dashboard');
           }
           return redirect()->route('home');
       }



    }
}
