<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\FacultyEmailVerifyRegister;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class FacultyController extends Controller
{
    public function sendFacultyEmail(Request $req)
    {
        $req->validate([
            'email'=>'required|email'
        ]);
        $res=Teacher::updateOrCreate(['email_id'=>$req->email],[
            'email_id'=>$req->email
        ]);

        $route=URL::temporarySignedRoute('verify-email-register',now()->addMinute(2),['user'=>Crypt::encrypt($res->id)]);
        Mail::to($res->email_id)->send(new FacultyEmailVerifyRegister($route));
        Session::flash('success','Registration Link has been send to your email');
       return redirect()->back();
        
    }

    public function verifyemail_register($userid)
    {
        return Crypt::decrypt($userid);
    }
}
