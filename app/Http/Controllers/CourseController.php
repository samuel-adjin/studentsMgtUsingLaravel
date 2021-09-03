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

                $course = Course::paginate('5');
                 $users = User::where('isAdmin',1)->get();
                 return view('pages.course')
                 ->with( 'user',$users)
                 ->with('course',$course);
    }

    public function search(Request $request)
    {
    $course = Course::query();
        if($request->has('title') && $request->title !=""){
           $course->where('title',$request->title);
        }
        // return $course->toSql();
        $filter = $course->paginate(10);
        $user = User::where('isAdmin',1)->get();

        return view('pages.search', compact('filter','user'));
    }


    public function viewCourse($id)
    {
        $view = Course::findOrFail($id);
        return view('pages.enrol',[
            'enrol'=>$view,
        ]);
    }


    public function filterByName(Request $request)
    {
        $course = Course::query();
        if($request->has('name') && $request->name !=""){
           $course->where('name',$request->name);
        }
        // return $course->toSql();
        $filter = $course->paginate(10);
        $user = User::where('isAdmin',1)->get();

        return view('pages.search', compact('filter','user'));
    }
}
