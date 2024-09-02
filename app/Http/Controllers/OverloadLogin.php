<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OverloadLogin extends Controller
{
    public string $id,$pass;

    public function login($id = null, $pass = null)
    {
        if ($id === null && $pass === null) {
            return "You have to provide Id and Password";
        } elseif ($pass === null) {
            return "You have to provide Password";
        } elseif ($id != "admin" || $pass != "admin") {
            return "Id or Password is incorrect";
        } else {
            return "Welcome User";
        }
    }
}
