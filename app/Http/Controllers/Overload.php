<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Overload extends Controller
{
    public function Check($id = null){
        if($id == null){
            return "You have to provide Id";
        }else{
            return "Welcome User";
        }
    }
}
