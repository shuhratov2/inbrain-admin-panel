<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all();
        return view('student.index',compact('student'));
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $student = new Student;
        $student->name_uz = $request->input('name_uz');
        $student->name_ru = $request->input('name_ru');
        $student->name_en = $request->input('name_en');
        $student->body_uz = $request->input('body_uz');
        $student->body_ru = $request->input('body_ru');
        $student->body_en = $request->input('body_en');
        if($request->hasfile('profile_image_uz'))
        {
            $file = $request->file('profile_image_uz');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/students/', $filename);
            $student->profile_image_uz = $filename;
        }
        if($request->hasfile('profile_image_ru'))
        {
            $file = $request->file('profile_image_ru');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/students/', $filename);
            $student->profile_image_ru = $filename;
        }
        if($request->hasfile('profile_image_en'))
        {
            $file = $request->file('profile_image_en');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/students/', $filename);
            $student->profile_image_en = $filename;
        }
        $student->save();
        return redirect()->back()->with('status','Yangilik yuklandi');
    }
    public function destroy($id)
    {
        $student = Student::find($id);
        $destination = 'uploads/students/'.$student->profile_image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $student->delete();
        return redirect()->back()->with('status','Student Image Deleted Successfully');
    }
}
