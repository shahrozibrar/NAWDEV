<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;

class BlogController extends Controller
{
    public function create(){
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        if($request->hasfile('filename'))
         {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
         }
        $blogs= new \App\Blogs;
        $blogs->name=$request->get('name');
        $blogs->headline=$request->get('headline');
        $blogs->summary=$request->get('summary');
        
        $blogs->filename=$name;
        $blogs->save();
        
        return redirect('blogs')->with('success', 'Information has been added');
    }

    public function index()
    {
        $blogs=\App\Blogs::paginate(5);
        return view('blogs.index',compact('blogs'));
    }

    public function edit($id)
    {
        $blog = \App\Blogs::find($id);
        return view('blogs.edit',compact('blog','id'));
    }
    public function show($id)
    {
        $blogs = \App\Blogs::find($id);
        
        return view('blogs.show',compact('blogs'));
    }
    public function destroy($id)
    {
        $blog = \App\Blogs::find($id);
        $blog->delete();
        return redirect('blogs')->with('success','Information has been  deleted');
    }
}
