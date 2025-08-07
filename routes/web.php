<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard;
use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\Signup;




Route::get('/login', Login::class)->name('Login');
Route::get('/signup', Signup::class)->name('Signup');
route::get('/dashboard', Dashboard::class)->name('Dashboard');
Route::get('/classement', Dashboard::class)->name('Classement');
Route::get('/about', Dashboard::class)->name('About');
Route::get('/', Home::class)->name('Home');
