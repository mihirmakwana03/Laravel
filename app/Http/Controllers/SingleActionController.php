<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleActionController extends Controller
{
    public function __invoke()
    {
        echo "This is Single Action Controller";
    }
}
