<?php

namespace App\Http\Controllers\Backend;
use App\Models\Teacher;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Backend.teacher');
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
            'name'=>'required|min:2|unique:teacher,name',
            'father_name'=>'required',
            'mobile'=>'required|max:10',
            'email'=>'required|unique|email',
            'password'=>'required',
            'file'=>'nullable|image',
            'cv'=>'nullable|pdf'
          ]);
          $image='';
          $cv='';
          if($request->hasFile('file'))
          {
            $image='Teacher-'.time().'-'.rand(0,99).'.'.$request->file->extension();
            $request->file->move(public_path('upload/teacher'),$image);
            $image ='upload/teacher/'.$image;
          }
          if($request->hasFile('file'))
          {
            $cv='Teacher-'.time().'-'.rand(0,99).'.'.$request->file->extension();
            $request->file->move(public_path('upload/teacher'),$cv);
            $cv ='upload/teacher/'.$cv;
          }
          $res=Teacher::create([
            'name'=>$request->name,
            'father_name'=>$request->father_name,
            'mobile'=>$request->mobile,
            'email'=>$request->email,
            'password'=>$request->password,
            'cv'=>$request->cv,
            'pic'=>$image
          ]);  
     if($res)
       {
        Session::flash('success','Teacher added successfully');
       }
       else {
        Session::flash('fail','Teacher added fail');
       }
  
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
        //
    }
}
