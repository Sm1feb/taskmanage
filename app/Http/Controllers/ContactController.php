<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;
class ContactController extends Controller
{
    //
    //Contact mail Code
    Public $mail;
    Public $mail1;
    Public $mail3;
    public function contact(Request $request)
    {
        $add = new Contact;
        if($request->isMethod('post'))
    {
      $this->mail1=$add->name=$request->get('name');
       $this->mail= $add->email=$request->get('email');
       $this->mail3= $add->message=$request->get('message');
        $add->save();
        $data = $this->mail3;
       Mail::send('email',compact('data'),function($message){
        $message->from('mahajansmriti8@gmail.com','Smriti');
        $message->to($this->mail,$this->mail1);
        $message->subject("Verify......");
       });
       return back()->withErrors(['Message'=>'Thanku for Contacting Us']);
    }
}
}