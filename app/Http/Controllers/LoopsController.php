<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoopsController extends Controller
{
    public function for()
    {
        return view('blade.for');
    }

    public function while()
    {
        return view('blade.while');
    }
}

