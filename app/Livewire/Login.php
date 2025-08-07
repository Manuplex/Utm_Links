<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Attributes\Validate;

class Login extends Component
{
    #[Title('Login')]

    public $eye_path='imgs/eye_close.png';
    public $type='password';
    public $password;
    public $username;

    public function change_eye(){
        if ($this->eye_path === 'imgs/eye_close.png') {
            $this->eye_path = 'imgs/eye_fill.png';
            $this->eye_path = 'imgs/eye_fill.png';
            $this->type = 'text';
        } else {
            $this->eye_path = 'imgs/eye_close.png';
            $this->type = 'password';
        }
    }

    public function User_login(){
        $this->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);

        if (Auth::attempt(['username' => $this->username, 'password' => $this->password])) {
            session()->flash('message', 'Login successful.');
            return redirect()->route('Dashboard');
        } else {
            session()->flash('error', 'username or password is incorrect.');
            return redirect()->back();
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
