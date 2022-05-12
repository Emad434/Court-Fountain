<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\News;
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

    public function edit($id)
    {
        $course = Course::find($id);
        return view('Admin.Courses.form',compact('course'));
    }

    public function update(Request $req)
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
        $course = Course::find($req->id);
        $course->update($req->all());
        return redirect()->route('courses');
    }

    public function delete($id)
    {
        $course = Course::find($id);
        $course->delete();
        return back();
    }
}
