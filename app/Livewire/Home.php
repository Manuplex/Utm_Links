<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    #[Title('home')]

    public function render()
    {

        return view('livewire.home');
    }
}
