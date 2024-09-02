<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id,$name)
    {
        echo "Hello Controller";
        echo "<br>".$id;
        echo "<br>" .$name;
    }

    public function user()
    {
        echo "Hello Controller";
    }
}
