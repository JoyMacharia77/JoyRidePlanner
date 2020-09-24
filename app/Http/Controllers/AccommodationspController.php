<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accommodationsp;

class AccommodationspController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accommodationsps = Accommodationsp::all()->toArray();
        return view('accommodationsp.acc_index', compact('accommodationsps'));
    }

    public function view()
    {
        $accommodationsps = Accommodationsp::all()->toArray();
        return view('accommodationsp.admin_view', compact('accommodationsps'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accommodationsp.acc_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $accommodationsps= new Accommodationsp();

        $accommodationsps->bs_name= $request->input('bs_name');
        $accommodationsps->bs_description = $request->input('bs_description');
        $accommodationsps->currency= $request->input('currency');
        $accommodationsps->price= $request->input('price');
        $accommodationsps->bs_email= $request->input('bs_email');
       
        if($request -> hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('accommodationsps', $filename);
            $accommodationsps->image = $filename;
        } else{
            return $request;
            $accommodationsps->image = '';
        }
    
             $accommodationsps->save();

             return redirect()->route('accommodationsp.index')->with('success', 'New Service Registered Successfully');
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
        $accommodationsp = Accommodationsp::find($id);
        return view('accommodationsp.acc_edit', compact('accommodationsps', 'id'));
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
    $accommodationsps= Accommodationsp::find($id);

    $accommodationsps->bs_name = $request->input('bs_name');
    $accommodationsps->bs_description = $request->input('bs_description');
    $accommodationsps->currency= $request->input('currency');
    $accommodationsps->price= $request->input('price');
    $accommodationsps->bs_email= $request->input('bs_email');

    if($request -> hasfile('image')){
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('accommodationsps', $filename);
        $accommodationsps->image = $filename;
    } else{
        return $request;
        $accommodationsps->image = '';
    }
         $accommodationsps->save();
   
         return redirect()->route('accommodationsp.index')->with('success', 'Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $accommodationsp = Accommodationsp::find($id);
        $accommodationsp->delete();
        return redirect()->route('accommodationsp.index')->with('success','Data Deleted Successfully');
    }
}
