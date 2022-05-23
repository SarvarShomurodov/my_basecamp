<?php

namespace App\Http\Controllers\Admin;
use App\Models\Comment;
use App\Models\Projects;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function store(Requset $request){
        if(Auth::check()){
            $validator = Validator::make($request -> all(),[
                'comment_body'=> 'required|string', 
            ]);

            if($validator->fails()){
                return redirect()->back()->with('message','No comment');
            }

            $project = Projects::where('id',$request->post_slug)->where('status','0')->first();
            if($project){
                Comment::create([
                    'post_id'=> $project->id,
                    'user_id'=>Auth::user()->id,
                    'comment_body' => $request->comment_body
                ]);
            }
            else
            {
                redirect()->back()->with('message','No Soch found');
            }

        }else{
            redirect()->back()->with('message','Login first to comment');
        }
    }
}
