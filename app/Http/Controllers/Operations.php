<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Operations extends Controller
{
    //Factorial
    public function factorial($a)
    {
        if ($a < 1) {
            return "Enter a positive number";
        } else {
            $f = 1;
            for ($i = 1; $i <= $a; $i++) {
                $f = $i * $f;
            }
            return "Factorial of $a is $f";
        }
    }

    //Sum of Odd numbers
    public function odd($a)
    {
        if ($a == 0) {
            return "Enter a Valid number";
        } else {
            $odd = 0;
            for ($i = 1; $i <= $a; $i++) {
                if ($i % 2 != 0) {
                    $odd = $i + $odd;
                }
            }
            return "Sum of odd numbers till $a is $odd";
        }
    }

    //Sum of Even numbers
    public function even($a)
    {
        if ($a == 0) {
            return "Enter a Valid number";
        } else {
            $even = 0;
            for ($i = 1; $i <= $a; $i++) {
                if ($i % 2 == 0) {
                    $even = $i + $even;
                }
            }
            return "Sum of odd numbers till $a is $even";
        }
    }

}
