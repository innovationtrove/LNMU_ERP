<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\FacultyEmailVerifyRegister;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class FacultyController extends Controller
{
    public function verifyFacultyEmail(){
        return view('Frontend.verify_faculty_email');
    }

    public function sendFacultyEmail(Request $req)
    {
        $req->validate([
            'email'=>'required|email'
        ]);
        $res=Teacher::updateOrCreate(['email_id'=>$req->email],[
            'email_id'=>$req->email
        ]);

        $route=URL::temporarySignedRoute('faculty-register',now()->addHour(20),['user'=>Crypt::encrypt($res->id)]);
        Mail::to($res->email_id)->send(new FacultyEmailVerifyRegister($route));
        Session::flash('success','Registration link has been sent to your email');
       return redirect()->back();

    }

    public function verifyemail_register($userid)
    {
        $user_id = Crypt::decrypt($userid);
        $departments = Department::all();
        $designations = Designation::all();
        $faculties = Teacher::all();
        return view('Frontend.faculty_registration', compact('faculties', 'departments', 'designations'));
    }
}
