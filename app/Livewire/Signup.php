<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class Signup extends Component
{
    #[Title('Signup')]

    public $eye_path='imgs/eye_close.png';
    public $type='password';
    public $email;
    public $password;
    public $username;
    public $password_confirmation;


    public function change_eye(){
        if ($this->eye_path === 'imgs/eye_close.png') {
            $this->eye_path = 'imgs/eye_fill.png';
            $this->type = 'text';
        } else {
            $this->eye_path = 'imgs/eye_close.png';
            $this->type = 'password';
        }
    }
    public function User_create(){
        //  dump($this);
        $this->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|string|min:8',
        ]);

        User::create([
            'username' => $this->username,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        session()->flash('message', 'Account created successfully.');
        return redirect()->route('Login');
         
       
    }

    public function render()
    {
        return view('livewire.signup');
    }
}
