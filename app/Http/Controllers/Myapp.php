<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Myapp extends Controller
{
    public function  index(){
        return view('template.Base');
    }
}
