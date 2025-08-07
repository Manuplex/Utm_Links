<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    #[Title('Login')]

    public function render()
    {
        return view('livewire.login');
    }
}
