<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\EnrolCourse;
use Illuminate\Http\Request;

class EnrolController extends Controller
{
    //
    public function __construct()
    {
       return $this->middleware(['auth']);

    }

    public function index()
    {
        return view('pages.enrol');
    }

    public function store($id)
    {

       $course_id = Course::find($id);
       $enrolC= $course_id->id;

        auth()->user()->enrolCourse()->create([
            "course_id"=>$enrolC
        ]);

        return back();
    }
}
