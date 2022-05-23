<?php

namespace App\Http\Controllers\Admin;

use App\Models\Projects;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function index(){
        $project = Projects::all();
        return view('admin.project.allpro',compact('project'));
    }



    public function add(){
        return view('admin.project.add');
    }

    public function insert(Request $request){
        $project = new Projects;

        $project->name = $request->input('name');
        $project->description = $request->input('description');
        $project->save();
        return redirect('allproject')->with('status',"Hello");
    }

    public function edit($id){
        $project = Projects::find($id);
        return view('admin.project.edit',compact('project'));

    }

    public function update(Request $request,$id){
        $project = Projects::find($id);

        $project->name = $request->input('name');
        $project->description = $request->input('description');
        $project->update();
        return redirect('allproject')->with('status',"Update Success");
    }

    public function destroy($id){
        $project = Projects::find($id);

        $project->delete();
        return redirect('allproject')->with('status',"Update Success");
    }


    public function massage($id){
        $project = Projects::find($id);
        return view('admin.discussion.index',compact('project'));
    }
    

    
}
