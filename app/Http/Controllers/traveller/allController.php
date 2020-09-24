<?php

namespace App\Http\Controllers\traveller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\all;

class allController extends Controller
{
    public function index(){
    
        return view('traveller.all');
    }

    
    public function places(Request $request){


    
        $all=all::where('category','local')->get();

        $search=$request->get('search');
/*
        $all=all::where('estimatedP','like','%'.$search.'%')->get(); */
   //     $request->filterValue;
     //   $all = all::where('$estimatedP','<=','filterValue')->get();

       // $all= all::all();

       $all=all::where('estimatedP','like','%'.$search.'%')->get();
     
       return view('traveller.all')->with("all", $all);
    
    }
    /*
   public function search(Request $request)
{
    $search=$request->get('search');
    $all=all::where('estimatedP','like','%'.$search.'%')->paginate(5);
    return view('traveller.all')->with("all", $all);
    
 
}
   */
public function profile(Request $request, $id){

    $all = all ::findOrFail( $id);
    
    return view('traveller.info')->with("all", $all);
    
        }

        
  
}