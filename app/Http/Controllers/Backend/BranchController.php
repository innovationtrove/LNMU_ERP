<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $branchd=Branch::where('deleted_at',Null)->get();
       // $bdata=Branch::find($id);
        return view('Backend.branch',compact('branchd'));

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
      $request->validate([
        'name'=>'required|min:2|unique:branches,name',
        'file'=>'nullable|image',
        'title'=>'nullable|min:3'
      ]);
      $image='';
      if($request->hasFile('file'))
      {
        $image='Branch-'.time().'-'.rand(0,99).'.'.$request->file->extension();
        $request->file->move(public_path('upload/branch'),$image);
        $image ='upload/branch/'.$image;
      }

       $res=Branch::create([
        'name'=>$request->name,
        'title'=>$request->title,
        'pic'=>$image


       ]);
       if($res)
       {
        Session::flash('success','Branch added successfully');
       }
       else
       {
        Session::flash('fail','Opp\'s Branch not added ');
       }
        return redirect()->back();

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $branchdata=Branch::get();
        // return view('Backend.branch',compact('branchdata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return $id;
        $branchd=Branch::where('deleted_at',Null)->get();
        $bdata=Branch::find($id);
        return view('Backend.branch',compact('branchd','bdata'));
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
      //  return $request;
        $edit_id= $request->data_id;
        $request->validate([
            'name'=>'required|min:2',
            'file'=>'nullable|image',
            'title'=>'nullable|min:3'
          ]);
          $image=Branch::find($edit_id)->pic;
          if($request->hasFile('file'))
          {
            $image='Branch-'.time().'-'.rand(0,99).'.'.$request->file->extension();
            $request->file->move(public_path('upload/branch'),$image);
            $image ='upload/branch/'.$image;
          }
           $res=Branch::find($edit_id)->update([
            'name'=>$request->name,
            'title'=>$request->title,
            'pic'=>$image


           ]);
           if($res)
           {
            Session::flash('success','Branch Updated successfully');
           }
           else
           {
            Session::flash('fail','Opp\'s Branch not Updated ');
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
        // return $id;exit;
        $del=Branch::find($id);
        $del->delete();
        return redirect()->back();
    }
}
