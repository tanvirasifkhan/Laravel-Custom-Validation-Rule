<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Validator;
use App\Rules\CheckTitle;
use App\Rules\LowerCase;

class PostController extends Controller
{
    // show create post view
    public function create(){
        return view('create_post');
    }

    // store post into the database
    public function store(Request $request){
        $validators=Validator::make($request->all(),[
            'title'=>['required',new CheckTitle()],
            'category'=>['required',new LowerCase()],
            'description'=>'required'
        ]);
        if($validators->fails()){
            return redirect()->route('post.create')->withErrors($validators)->withInput();
        }else{
            $post=new Post();
            $post->title=$request->title;
            $post->category=$request->category;
            $post->description=$request->description;
            $post->save();
            return redirect()->route('post.create')->with('message','Post created successfully !');
        }
    }
}
