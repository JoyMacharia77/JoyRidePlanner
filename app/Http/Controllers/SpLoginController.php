<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Auth;

class SpLoginController extends Controller
{
    protected function redirectTo(){
        if(providers::provider()->bs_type == 'individualbs'){
            return 'individualsp.create';
        }
        else if(providers::provider()->bs_type == 'groupbs'){
             return 'groupsp.create';
        }
        else if(providers::provider()->bs_type == 'accommodationbs'){
            return 'accommodationsp.create';
        }
       else{
        return 'diningsp.create';
       }
    }
}
