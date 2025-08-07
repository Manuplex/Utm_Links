<?php

namespace App\Livewire;

use Livewire\Component;

class About extends Component
{
     #[Title('About')]

    public function render()
    {
        return view('livewire.about');
    }
}
