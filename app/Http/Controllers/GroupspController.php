<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Groupsp;

class GroupspController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groupsps = Groupsp::all()->toArray();
        return view('groupsp.gr_index', compact('groupsps'));
    }
    public function view()
    {
        $groupsps = Groupsp::all()->toArray();
        return view('groupsp.admin_view', compact('groupsps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('groupsp.gr_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $groupsps= new Groupsp();

        $groupsps->bs_name= $request->input('bs_name');
        $groupsps->bs_description = $request->input('bs_description');
        $groupsps->currency= $request->input('currency');
        $groupsps->price= $request->input('price');
        $groupsps->bs_email= $request->input('bs_email');
       
        if($request -> hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('groupsps', $filename);
            $groupsps->image = $filename;
        } else{
            return $request;
            $groupsps->image = '';
        }
    
             $groupsps->save();
    
             /*return redirect()->route('individualsp.index')->with('individualsps',$groupsps);*/
             return redirect()->route('groupsp.index')->with('success', 'New Service Registered Successfully');
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
        $groupsp = Groupsp::find($id);
        return view('groupsp.gr_edit', compact('groupsp', 'id'));
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
        $groupsps= Groupsp::find($id);

        $groupsps->bs_name = $request->input('bs_name');
        $groupsps->bs_description = $request->input('bs_description');
        $groupsps->currency= $request->input('currency');
        $groupsps->price= $request->input('price');
        $groupsps->bs_email= $request->input('bs_email');
    
        if($request -> hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('groupsps', $filename);
            $groupsps->image = $filename;
        } else{
            return $request;
            $groupsps->image = '';
        }
    
             $groupsps->save();
       
             return redirect()->route('groupsp.index')->with('success', 'Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $groupsp = Groupsp::find($id);
        $groupsp->delete();
        return redirect()->route('groupsp.index')->with('success','Data Deleted Successfully');
    }
}
