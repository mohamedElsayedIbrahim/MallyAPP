<?php

namespace App\Http\Controllers;

use App\Models\Cource;
use Illuminate\Http\Request;


class CourceController extends Controller
{
    //get All Cources

    Public function index(){
        $cources = Cource::all();
        
        return view('cources.index',compact('cources'));
    }

    //Get course detials

    Public function show($id){
        $cource = Cource::findorfail($id);
        
        return view('cources.show',compact('cource'));
    }

    //Store New course

    public function store(Request $request)
    {
        $request->validate([
            'CourseName'=>'required|string|max:100',
            'CoursePrice'=>'required|string',
            'CourseImage'=>'image|mimes:jpg,bmp,png',
        ]);

        $name=null;

        //move images
        if($request->hasFile('CourseImage')){
            $image = $request->file('CourseImage');
            $ext = $image->getClientOriginalExtension();
            $name = "course-".uniqid().".$ext";
            $image->move( public_path('uploads/courses') ,$name);
        }

        Cource::create([
            'title'=>$request->input('CourseName'),
            'desc'=>$request->input('CourseDesc'),
            'disccount'=>$request->input('CourseDiscount'),
            'price'=>$request->input('CoursePrice'),
            'image'=>$name
        ]);

        return redirect(route('course.index'));
        
    }
    
    Public function edit($id){
        $cource = Cource::findorfail($id);
        
        return view('cources.edit',compact('cource'));
    }

    public function update($id,Request $request)
    {
        $request->validate([
            'CourseName'=>'required|string|max:100',
            'CoursePrice'=>'required|string',
            'CourseImage'=>'nullable|image|mimes:jpg,bmp,png',
        ]);
        
        $course = Cource::findorfail($id);
        $name = $course->image;
        //move images
        if($request->hasFile('CourseImage')){

            if($course->image !== null){
                unlink(public_path('uploads/courses'.$course->image));
            }

            $image = $request->file('CourseImage');
            $ext = $image->getClientOriginalExtension();
            $name = "course-".uniqid().".$ext";
            $image->move(public_path('uploads/courses'),$name);
        }

        $course->update([
            'title'=>$request->input('CourseName'),
            'desc'=>$request->input('CourseDesc'),
            'disccount'=>$request->input('CourseDiscount'),
            'price'=>$request->input('CoursePrice'),
            'image'=>$name,
        ]);

        return redirect(route('course.edit',$id));
    }

    public function delete($id)
    {
        $course = Cource::findorfail($id);

        if($course->image !== null){
            unlink(public_path('uploads/courses/'.$course->image));
        }
        $course->delete();

        return redirect(route('course.index'));
    }
}
