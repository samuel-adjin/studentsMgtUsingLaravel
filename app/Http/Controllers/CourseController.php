<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    //

    public function __construct()
    {
          return  $this->middleware(['auth']);
    }

    public function index()
    {

                $course = Course::paginate('28');
                 $users = User::all();
                 return view('pages.course')
                 ->with( 'user',$users)
                 ->with('course',$course);
    }

    public function search()
    {

       $search = $_GET['search'];
       $course = DB::table('courses')->where('title','like', '%'.$search.'%')->paginate(2);
       return view('pages.main')->with('search',$course);


    }
}
