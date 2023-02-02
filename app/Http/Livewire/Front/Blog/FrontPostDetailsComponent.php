<?php

namespace App\Http\Livewire\Front\Blog;

use App\Category;
use App\Post;
use App\Topic;
use Livewire\Component;

class FrontPostDetailsComponent extends Component
{

    public $topic, $post;

    public $categories;

    public function mount($topic,$post){
        $this->topic = Topic::where('slug','=',$topic)->first();
        $this->post = Post::where('slug','=',$post)->first();

        $this->categories=Category::where('topic_id','=',$topic->id)->get();
    }
    
    public function render()
    {
        return view('livewire.front.blog.front-post-details-component')->layout('layouts.app-front');
    }
}
