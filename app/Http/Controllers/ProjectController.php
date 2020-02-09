<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;

class ProjectController extends Controller
{
    public function create(){
        return view('projects.create');
    }

    public function store(Request $request)
    {
        if($request->hasfile('filename'))
         {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
         }
        $projects= new \App\Projects;
        $projects->name=$request->get('name');
        $projects->headline=$request->get('headline');
        $projects->summary=$request->get('summary');
        
        $projects->filename=$name;
        $projects->save();
        
        return redirect('projects')->with('success', 'Information has been added');
    }

    public function index()
    {
        $projects=\App\Projects::paginate(9);
        return view('projects.index',compact('projects'));
    }

    public function edit($id)
    {
        $project = \App\Projects::find($id);
        return view('projects.edit',compact('project','id'));
    }
    public function show($id)
    {
        $projects = \App\Projects::find($id);
        
        return view('projects.show',compact('projects'));
    }
    public function destroy($id)
    {
        $project = \App\Projects::find($id);
        $project->delete();
        return redirect('projects')->with('success','Information has been  deleted');
    }
}
