<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostulerController extends Controller
{
    public function index()
    {
        return view('postule'); 
    }
}
