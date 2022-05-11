<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    public function index()
    {
        $course = Course::orderByDesc('id')->get();
        return view('Admin.Courses.courses',compact('course'));
    }
    public function create()
    {
        return view('Admin.Courses.form');
    }
    public function store(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'title' => 'required',
            'subtitle' => 'required',
            'code' => 'required|alpha_num'
        ],[
            'title.required' => 'Title is required',
            'subtitle.required' => 'Subtitle is required',
            'code.required' => 'Code  is required',
            'code.alpha_num' => 'Should be alpha numeric'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        Course::create($req->all());
        return redirect()->route('courses');
    }
}
