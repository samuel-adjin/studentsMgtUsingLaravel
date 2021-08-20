<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class AppController extends Controller
{
    //
    public function __construct()
    {
      return  $this->middleware(['guest']);
    }

    public function index()
    {

        $courses = Course::paginate(25);
        return view('layouts.app',[
            'courses'=>$courses
        ]);
    }
}
