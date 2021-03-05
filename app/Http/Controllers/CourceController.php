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
        Cource::insert([
            'title'=>$request->input('CourseName'),
            'desc'=>$request->input('CourseDesc'),
            'disccount'=>$request->input('CourseDiscount'),
            'price'=>$request->input('CoursePrice'),
            'image'=>$request->input('CourseImage'),

        ]);

        return redirect(route('course.index'));
        
    }
    
    Public function edit($id){
        $cource = Cource::findorfail($id);
        
        return view('cources.edit',compact('cource'));
    }

    public function update($id,Request $request)
    {
        Cource::findorfail($id)->update([
            'title'=>$request->input('CourseName'),
            'desc'=>$request->input('CourseDesc'),
            'disccount'=>$request->input('CourseDiscount'),
            'price'=>$request->input('CoursePrice'),
            'image'=>$request->input('CourseImage'),

        ]);

        return redirect(route('course.edit',$id));
    }

    public function delete($id)
    {
        Cource::findorfail($id)->delete();

        return redirect(route('course.index'));
    }
}
