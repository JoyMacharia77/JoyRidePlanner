<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Femalepackinglist;

class FemalepackinglistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $females = Femalepackinglist::all()->toArray();
        return view('traveller.femalepackingindex', compact('females'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('traveller.femalepackinglist');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $females= new Femalepackinglist();

        // $males->item = $request->input('item');
         $females->item = implode($request->input('item'));
         $females->save();

         return redirect()->route('femalepackinglist.create')->with('success', 'New Item Added Successfully');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $female = Femalepackinglist::find($id);
        $female->delete();
        return redirect()->route('femalepackinglist.index')->with('success', 'Item Deleted Successfully');
    }
}
