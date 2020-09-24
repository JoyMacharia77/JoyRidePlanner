<?php

namespace App\Http\Controllers\admin;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\providers;
use Illuminate\Support\Facades\Hash;

class providersController extends Controller
{
    public function index(){

        return view('admin.providers');
    }


    public function registeredit(Request $request, $id)
    {
    
        $providers = providers ::findOrFail( $id);
        return view('admin.providers-edit')->with("providers", $providers);
    
    
    }



    public function registerdelete($id){
        $providers =providers::findOrFail($id);
        $providers->delete();
        
        return redirect('/providers')->with('status','SP Details Deleted Successfully');
        }


    
public function registerupdate(Request $request, $id){
    $providers= providers::find($id);

    $providers->owner_name = $request->input('owner_name');
    $providers->owner_email = $request->input('owner_email');
    $providers->bs_type= $request->input('bs_type');
    $providers->service_type= $request->input('service_type');
    $providers->bs_name= $request->input('bs_name');
    $providers->bs_email= $request->input('bs_email');
    $providers->country= $request->input('country');
    $providers->city = $request->input('city');

$providers->update();

return redirect('/providers')->with('status','SP Details Updated Successfully');
}


public function providers(){

    $providers = providers::all();

    
   return view('admin.providers')->with("providers", $providers);

}

public function store(Request $request){

    $providers= new providers;

$providers->owner_name = $request->input('owner_name');
$providers->owner_email = $request->input('owner_email');
$providers->bs_type= $request->input('bs_type');
$providers->service_type= $request->input('service_type');
$providers->bs_name= $request->input('bs_name');
$providers->bs_email= $request->input('bs_email');
$providers->country= $request->input('country');
$providers->city = $request->input('city');
$providers->password= Hash::make($request->input('password'));

$providers->save();

return redirect('/providers')->with('status','New Service Provider Registered Successfully');
}

}
