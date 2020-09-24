<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diningsp;

class DiningspController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diningsps = Diningsp::all()->toArray();
        return view('diningsp.din_index', compact('diningsps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('diningsp.din_create');
    }

    public function view()
    {
        $diningsps = Diningsp::all()->toArray();
        return view('diningsp.admin_view', compact('diningsps'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $diningsps= new Diningsp();

        $diningsps->bs_name= $request->input('bs_name');
        $diningsps->bs_description = $request->input('bs_description');
        $diningsps->bs_email= $request->input('bs_email');
       
        if($request -> hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('diningsps', $filename);
            $diningsps->image = $filename;
        } else{
            return $request;
            $diningsps->image = '';
        }
    
             $diningsps->save();
    
             /*return redirect()->route('individualsp.index')->with('individualsps',$diningsps);*/
             return redirect()->route('diningsp.index')->with('success', 'New Service Registered Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $diningsp = Diningsp::find($id);
        return view('diningsp.din_edit', compact('diningsp', 'id'));
    }
  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $diningsps= Diningsp::find($id);

        $diningsps->bs_name = $request->input('bs_name');
        $diningsps->bs_description = $request->input('bs_description');
        $diningsps->bs_email= $request->input('bs_email');
    
        if($request -> hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('diningsps', $filename);
            $diningsps->image = $filename;
        } else{
            return $request;
            $diningsps->image = '';
        }
    
             $diningsps->save();
       
             return redirect()->route('diningsp.index')->with('success', 'Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $diningsp = Diningsp::find($id);
        $diningsp->delete();
        return redirect()->route('diningsp.index')->with('success','Data Deleted Successfully');
    }
    
}
