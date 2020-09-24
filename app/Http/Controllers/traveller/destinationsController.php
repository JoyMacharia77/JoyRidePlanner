<?php

namespace App\Http\Controllers\traveller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\all;

class destinationsController extends Controller
{
    public function index(){



    
        return view('traveller.all');
    }



    public function Tdestinations(){



        $all = all::all();
    
        
       return view('traveller.all')->with("all", $all);
    

}
}