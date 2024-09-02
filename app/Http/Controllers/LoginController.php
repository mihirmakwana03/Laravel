<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $id = $request->id;
        $pass = $request->pass;
        if ($id == 'admin' && $pass == 'admin') {
            return view('welcome');
        } else {
            echo "<script>alert('Invalid Credentials')</script>";
            return view("form");
        }
    }
}

