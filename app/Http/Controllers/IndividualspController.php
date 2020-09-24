<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Individualsp;

class IndividualspController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $individualsps = Individualsp::all()->toArray();
        return view('individualsp.ind_index', compact('individualsps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('individualsp.ind_create');
    }

    public function view()
    {
        $individualsps = Individualsp::all()->toArray();
        return view('individualsp.admin_view', compact('individualsps'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $individualsps= new Individualsp();

    $individualsps->bs_name= $request->input('bs_name');
    $individualsps->bs_description = $request->input('bs_description');
    $individualsps->currency= $request->input('currency');
    $individualsps->price= $request->input('price');
    $individualsps->bs_email= $request->input('bs_email');
   
    if($request -> hasfile('image')){
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('individualsps', $filename);
        $individualsps->image = $filename;
    } else{
        return $request;
        $individualsps->image = '';
    }

         $individualsps->save();

         /*return redirect()->route('individualsp.index')->with('individualsps',$individualsps);*/
         return redirect()->route('individualsp.index')->with('success', 'New Service Registered Successfully');
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
        $individualsp = Individualsp::find($id);
        return view('individualsp.ind_edit', compact('individualsp', 'id'));
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
        $individualsps= Individualsp::find($id);

    $individualsps->bs_name = $request->input('bs_name');
    $individualsps->bs_description = $request->input('bs_description');
    $individualsps->currency= $request->input('currency');
    $individualsps->price= $request->input('price');
    $individualsps->bs_email= $request->input('bs_email');

    if($request -> hasfile('image')){

        
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('individualsps', $filename);
        $individualsps->image = $filename;
    } else{
        return $request;
        $individualsps->image = '';
    }

         $individualsps->save();
   
         return redirect()->route('individualsp.index')->with('success', 'Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $individualsp = Individualsp::find($id);
        $individualsp->delete();
        return redirect()->route('individualsp.index')->with('success','Data Deleted Successfully');
    }
}
