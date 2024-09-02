<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CubeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($number)
    {
        $result = $number * $number * $number;
        return "The cube of {$number} is {$result}";
    }
}
