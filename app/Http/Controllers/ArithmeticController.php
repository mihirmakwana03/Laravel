<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArithmeticController extends Controller
{
    public function add($num1, $num2)
    {
        $result = $num1 + $num2;
        return "The sum of {$num1} and {$num2} is {$result}";
    }

    public function sub($num1, $num2)
    {
        $result = $num1 - $num2;
        return "The difference between {$num1} and {$num2} is {$result}";
    }

    public function mul($num1, $num2)
    {
        $result = $num1 * $num2;
        return "The product of {$num1} and {$num2} is {$result}";
    }

    public function div($num1, $num2)
    {
        if ($num2 == 0) {
            return "Division by zero is not allowed.";
        }
        $result = $num1 / $num2;
        return "The division of {$num1} by {$num2} is {$result}";
    }
}
