<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Group;
use App\Groups;

class GroupsController extends Controller
{
    public function index()
    {
        /*$group = Group::all();
        return view('groups.index', ['groups' => $group]);
    */
    }
    
    public function show(Request $request)
    //(Group $id)
    {
        //return view('groups.show', ['groups' => $id]);
        //$group = $request->session()->get('group');
        //return view('groups.show',compact('group', $group));
        $request->session()->forget('groups');
        $group = Group::all();
        return view('groups.show',compact('groups',$group));
    
    
    
    }
    
    public function create()
    {
        return view('groups.create');
    }
    public function store()
    {
        $group = new Groups;
        
        $group->CurrentBusinessName= request('CurrentBusinessName');
        $group->description = request('description');
        $group->currency = request('currency');
        $group->price_per_hr = request('price_per_hr');
        $group->availability = request('availability');
        $group->contactNo = request('contactNo');
        $group->photo = request()->file('photo')->store('public');
        $group->save();

        return redirect()->route('create')->with('success','Data Added Successfully');
    }
}
