<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Topic;

class BlogController extends Controller
{
    public function index(){
        
        $topics=Topic::all();

        return view('blog.index',[
            'topics'=>$topics
        ]);
    }
}
