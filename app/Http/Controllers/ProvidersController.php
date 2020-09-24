<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvidersController extends Controller
{
    public function list(){
        $providers = [
            'Individual Service',
            'Facility Oriented',
            'Another',
    
        ];
    
        return view('sp.sphome',[
         'providers' => $providers,
    
            ]);


    }
}
