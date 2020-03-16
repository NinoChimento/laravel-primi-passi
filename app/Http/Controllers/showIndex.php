<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showIndex extends Controller
{   
    
    

    public function cd(){

        $data = [
            "cd1"=> ["https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg",
                "New Jersey", "Bon Jovi","1988"],
             "cd2"=> ["https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg",
                "New ","bon","1988"]   
        ];
        return view("index",$data);
    }
}
