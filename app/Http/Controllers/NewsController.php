<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderByDesc('id')->get();
        return view('Admin.News.news',compact('news'));
    }

    public function store(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'title'=>'required'
        ],[
            'title.required'=> 'Do not forget Title of the post'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $file_path = public_path('/news');
        $file_name = Str::uuid().'.txt';
        $file_path_and_name = $file_path.'/'.$file_name;
        $file_content = $req->html;
        file_put_contents($file_path_and_name,$file_content);
        News::create(['title'=>$req->title, 'file_name' => $file_name]);
        return redirect()->route('news');
    }

    public function view($id)
    {
        $news = News::find($id);
        $title = $news->title;
        $file_name = $news->file_name;
        $file_path = public_path('/news');
        $file_path_and_name = $file_path.'/'.$file_name;
        $file_content = '';
        if (file_exists($file_path_and_name)) {
            $file_content = file_get_contents($file_path_and_name);
        }
        return view('Admin.News.view',compact('title','file_content'));
    }

    public function edit($id)
    {
        $news = News::find($id);
        $title = $news->title;
        $file_name = $news->file_name;
        $file_path = public_path('/news');
        $file_path_and_name = $file_path.'/'.$file_name;
        $file_content = '';
        if (file_exists($file_path_and_name)) {
            $file_content = file_get_contents($file_path_and_name);
        }
        return view('Admin.News.editor',compact('id','title','file_content'));
    }

    public function update(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'title'=>'required'
        ],[
            'title.required'=> 'Do not forget Title of the post'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $news = News::find($req->id);
        $file_path = public_path('/news');
        $file_name = $news->file_name;
        $file_path_and_name = $file_path.'/'.$file_name;
        $file_content = $req->html;
        $file_content = file_put_contents($file_path_and_name,$file_content);
        $news->title = $req->title;
        $news->save();
        return redirect()->route('news');
    }

    public function delete($id)
    {
        $news = News::find($id);
        $news->delete();
        return back();
    }
}
