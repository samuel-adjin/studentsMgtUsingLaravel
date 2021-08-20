<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //

    public function __construct()
    {
       return $this->middleware(['guest']);

    }

    public function index()
    {
        return view('entry.register');
    }

    public function store(Request $request)
    {


        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed'
        ]);

        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=>Hash::make($request->password)
        ]);

        auth()->attempt(['email' => $request->email, 'password' => $request->password]);

        return redirect()->route('home');
     }
}
