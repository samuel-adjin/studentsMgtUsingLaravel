<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\EnrolCourse;
use App\Models\User;
use Illuminate\Http\Request;

class MycourseController extends Controller
{
    //

    public function __construct()
    {
         return   $this->middleware(['auth']);
    }

    public function index()
    {
        // $enrolled = EnrolCourse::paginate(5);
        $users = auth()->user();
        $enrolled = EnrolCourse::where('user_id',$users->id)->paginate(10);
        return view('pages.mycourse',[
        ])->with('enrolled',$enrolled);
    }

    public function filterByCourseTitle(Request $request)
    {
        $user = auth()->user();
       $courses = Course::query();
       $courses->whereHas('enrolCourse', function($q) use($user){
           $q->where('user_id',$user->id);
       });
       if($request->has('title') && $request->title !=null){
           $courses->where('title',$request->title);
       }
    // $enrolled = EnrolCourse::all()->where('user_id',$users->id)->where('course_id',11);
        
        return view('pages.filter', compact('courses','user'));
    }

}
