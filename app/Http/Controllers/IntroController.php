<?php

namespace laravel\Http\Controllers;

use Illuminate\Http\Request;

use laravel\Http\Requests;

class IntroController extends Controller
{
     public function intro()
    {
        return view('intro/intro');
    }
}
