<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class AddcourseController extends Controller
{
    //
    public function index()

    {
        $course = Course::paginate('5');
        return view('adminpages.addcourses',[
            'course'=>$course
        ]);
    }


    public function store(Request $request, Course $course)
    {

        // dd($request->user()->id);
        $this->validate($request,[
            'title'=>'required|max:255',
            'description'=>'required',
            'price'=>'required',
            'image'=>'required',
        ]);
        $image_path = time() .'-'. $request->title .'.' . $request->image->extension();
        $request->image->move(public_path('images'),$image_path);

        $course= auth()->user()->course()->create([
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'image'=>$image_path,
        ]);

        if($course){
            return redirect()->route('addcourse')->with('success','Course created successfully');
        }else{
            return redirect()->route('addcourse')->with('failed','Oops something went wrong');        }

    }
}
