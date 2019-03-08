<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Validator;

class PostController extends Controller
{
    // show create post view
    public function create(){
        return view('create_post');
    }
}
