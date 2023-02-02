<?php

namespace App\Http\Livewire\Front\Blog;

use App\Topic;
use Livewire\Component;

class FrontTopicsComponent extends Component
{
    public function render()
    {
        $topics=Topic::all();

        return view('livewire.front.blog.front-topics-component',[
            'topics'=>$topics
        ])->layout('layouts.app-front');
    }
}
