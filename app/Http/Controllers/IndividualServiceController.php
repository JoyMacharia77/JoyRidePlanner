<?php

namespace App\Http\Controllers;

use App\IndividualService;
use Illuminate\Http\Request;
use DB;
 /**
     * Show the step 1 Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */

class IndividualServiceController extends Controller
{
    public function createIndividualService(Request $request)
    {
        $individualservice = $request->session()->get('IndividualService');
        return view('sp.individualreg',compact('IndividualService', $individualservice));
    }

    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'CurrentBusinessName' => 'required|unique:products',
            'description' => 'required',
            'currency' => 'required',
            'price_per_hr' => 'required|numeric',
            'availability' => 'required',
            'contactNo' => 'required',
            'photo' => 'required',
           
        ]);

        /*if(empty($request->session()->get('IndividualService'))){
            $individualservice = new IndividualService();
            $individualservice->fill($validatedData);
            $request->session()->put('IndividualService', $individualservice);
        }else{
            $individualservice= $request->session()->get('IndividualService');
            $individualservice->fill($validatedData);
            $request->session()->put('IndividualService', $individualservice);
        }

        return redirect('/sp/individualreg');*/
        return 123;

    }
}
