<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerMiddleware extends Controller
{
    public function __invoke(Request $request)
    {
        return response('Hello World');
    }
}
