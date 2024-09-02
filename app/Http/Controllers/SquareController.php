<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SquareController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($number)
    {
        $result = $number * $number;
        return "The square of {$number} is {$result}";
    }
}
