<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    #[Title('Dashboard')]
    
    public function render()
    {
        return view('livewire.dashboard');
    }
}
