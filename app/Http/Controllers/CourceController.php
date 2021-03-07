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

        //move images

        $image = $request->file('CourseImage');
        $ext = $image->getClientOriginalExtension();
        $name = "course-".uniqid().$ext;
        $image->move(public_path('uploads/courses',$name));

        Cource::create([
            'title'=>$request->input('CourseName'),
            'desc'=>$request->input('CourseDesc'),
            'disccount'=>$request->input('CourseDiscount'),
            'price'=>$request->input('CoursePrice'),
            'image'=>$name,

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
            'CourseImage'=>'mimes:jpg,bmp,png',
        ]);
        
        //move images

        $image = $request->file('CourseImage');
        $ext = $image->getClientOriginalExtension();
        $name = "course-".uniqid().$ext;
        $image->move(public_path('uploads/courses',$name));

        Cource::findorfail($id)->update([
            'title'=>$request->input('CourseName'),
            'desc'=>$request->input('CourseDesc'),
            'disccount'=>$request->input('CourseDiscount'),
            'price'=>$request->input('CoursePrice'),
            'image'=>$name--,

        ]);

        return redirect(route('course.edit',$id));
    }

    public function delete($id)
    {
        Cource::findorfail($id)->delete();

        return redirect(route('course.index'));
    }
}
