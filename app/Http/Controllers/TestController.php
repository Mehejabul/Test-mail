<?php

namespace App\Http\Controllers;
use App\Mail\MyTestMail;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Mail;
class TestController extends Controller
{
    public function contact(){
        return view('emails.contact');
    }

    public function submit(Request $request){
        $name = $request->name;
        $email = $request->email;

        $mail = 'mehejabuloittizzo01@gmail.com';

        Mail::to($mail)->send(new MyTestMail($name,$email));

        return "Mail Sent Successfully";
    }
}

