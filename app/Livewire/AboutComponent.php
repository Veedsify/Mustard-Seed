<?php

namespace App\Livewire;

use Livewire\Component;

class AboutComponent extends Component
{
    public $title = 'Blog Page';
    public function render()
    {
        return view('livewire.about-component');
    }
}
