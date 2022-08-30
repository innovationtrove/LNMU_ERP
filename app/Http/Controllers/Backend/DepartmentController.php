<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\Department;
use Session;
Use File;
class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Branch=Branch::where('deleted_at',Null)->get();
        $Department=Department::where('deleted_at',Null)->get();
        return view('Backend.department',compact('Branch','Department'));

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
       //return $request;
        $request->validate([
            'd_name'=>'required|min:2',
            'branch_id'=>'required',
            'd_file'=>'nullable|image',
            'title'=>'nullable|min:3'
          ]);
          $image='';
          if($request->hasFile('d_file'))
          {
            $image='Department-'.time().'-'.rand(0,99).'.'.$request->d_file->extension();
            $request->d_file->move(public_path('upload/department'),$image);
            $image ='upload/department/'.$image;
          }
          $res=Department::create([
            'branch'=>$request->branch_id,
            'department_name'=>$request->d_name,
            'title'=>$request->title,
            'pic'=>$image
           ]);
           if($res)
           {
            Session::flash('success','Department added successfully');
           }
           else
           {
            Session::flash('fail','Opp\'s Department not added ');
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
        $editdep=Department::find($id);
        $Branch=Branch::where('deleted_at',Null)->get();
        $Department=Department::where('deleted_at',Null)->get();
        return view('Backend.department',compact('Branch','Department','editdep'));
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

        //return $id;

        $request->validate([
            'd_name'=>'required|min:2',
            'branch_id'=>'required',
            'd_file'=>'nullable|image',
            'title'=>'nullable|min:3'
          ]);
          $image='';
          if($request->hasFile('d_file'))
          {
            $image='Deparment-'.time().'-'.rand(0,99).'.'.$request->d_file->extension();
            $request->d_file->move(public_path('upload/department'),$image);
            $image ='upload/department/'.$image;
            $img_path=Department::find($id)->pluck('pic')[0];
            // if(unlink(public_path($img_path))){
            // Department::find($id)->update(['img'=>$img]);
            // }
            //$image_path = "$img"; // Value is not URL but directory file path
            // if(File::exists($img_path)) {
            //     File::unlink($img_path);
            // }
          }
          $res=Department::find($id)->update([
          'branch'=>$request->branch_id,
          'department_name'=>$request->d_name,
          'title'=>$request->title,
          'pic'=>$image]);
           if($res)
           {
            Session::flash('success','Department Update successfully');
           }
           else
           {
            Session::flash('fail','Opp\'s Department not Updated ');
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
        $del_data=Department::find($id);
        if($del_data->delete())
        {
         Session::flash('success','Department Deleted successfully');
        }
        else
        {
         Session::flash('fail','Opp\'s Department not Deleted ');
        }
         return redirect()->back();


    }
}
