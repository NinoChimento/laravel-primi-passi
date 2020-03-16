<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showIndex extends Controller
{   
    
    

    public function cd(){

        $data = [
            "cd1"=> ["nino","chimento"]
        ];
        return view("index",$data);
    }
}
