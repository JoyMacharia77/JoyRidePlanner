<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Malepackinglist;

class MalepackinglistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $males = Malepackinglist::all()->toArray();
        return view('traveller.malepackingindex', compact('males'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('traveller.malepackinglist');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $males= new Malepackinglist();

        // $males->item = $request->input('item');
         $males->item = implode($request->input('item'));
         $males->save();

         return redirect()->route('malepackinglist.create')->with('success', 'New Item Added Successfully');
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
        $male = Malepackinglist::find($id);
        $male->delete();
        return redirect()->route('malepackinglist.index')->with('success', 'Item Deleted Successfully');
    }
}
