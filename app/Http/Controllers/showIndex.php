<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showIndex extends Controller
{
    public function cd(){
        return view("index");
    }
}
