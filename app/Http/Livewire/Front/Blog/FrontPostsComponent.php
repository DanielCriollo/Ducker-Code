<?php

namespace App\Http\Livewire\Front\Blog;

use App\Post;
use App\Topic;
use App\Category;
use Livewire\Component;

class FrontPostsComponent extends Component
{


    public $topic;

    public $posts;
    public $categories=[];

    public function mount($topic){
        $this->topic = Topic::where('slug','=',$topic)->first();
        $this->categories=Category::where('topic_id','=',$this->topic->id)->get();
    }
    
    public function render()
    {
        $this->posts=Post::all();
        return view('livewire.front.blog.front-posts-component')->layout('layouts.app-front');
    }
}
