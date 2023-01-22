<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        return view('frontend.livewire.home-component')->layout('frontend.layouts.base');
    }
}
