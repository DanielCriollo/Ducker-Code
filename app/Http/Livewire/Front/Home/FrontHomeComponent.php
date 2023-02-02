<?php

namespace App\Http\Livewire\Front\Home;

use Livewire\Component;

class FrontHomeComponent extends Component
{
    public function render()
    {
        return view('livewire.front.home.front-home-component')->layout('layouts.app-front');
    }
}
