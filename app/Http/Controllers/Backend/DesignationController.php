<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Designation;
use Session;
class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $Designation=Designation::get();
        return view('Backend.designation',compact('Designation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'desig_name'=>'required|min:2|unique:designations,designation_name',
          ]);
          $res=Designation::create([
            'designation_name'=>$request->desig_name,
           ]);
           if($res)
           {
            Session::flash('success','Designation added successfully');
           }
           else
           {
            Session::flash('fail','Opp\'s Designation not added ');
           }
            return redirect()->back();
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
        $destData=Designation::find($id);
        $Designation=Designation::get();
        return view('Backend.designation',compact('Designation','destData'));

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
        $request->validate([
            'desig_name'=>'required|min:2',
          ]);
          $res=Designation::find($id)->update([
            'designation_name'=>$request->desig_name,
           ]);
           if($res)
           {
            Session::flash('success','Designation updated successfully');
           }
           else
           {
            Session::flash('fail','Opp\'s Designation updated not added ');
           }
            return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $del_data=Designation::find($id);
        if($del_data->delete())
        {
         Session::flash('success','Designation Deleted successfully');
        }
        else
        {
         Session::flash('fail','Opp\'s Designation not Deleted ');
        }
         return redirect()->back();

    }
}
