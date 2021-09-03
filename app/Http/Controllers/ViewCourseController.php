<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewCourseController extends Controller
{
    //

    public function viewCourse( $id)
    {
      $view = Course::find($id);

            return view('pages.test',[
                'v'=>$view,
            ]);
    }
}
