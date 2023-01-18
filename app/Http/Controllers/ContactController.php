<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use App\Models\Contact;
use App\Models\profile;
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

  //---form for image
  public function update(Request $request)
  {
      // $path = Storage::putFile('nature.jpg', $request->file('image'));
      $add = new profile;
      if($request->isMethod('post'))
     {
   $add->name=$request->get('name');
      $add->email=$request->get('email');
       $fileName = time()."-ws." . $request->file('image')->getClientOriginalExtension();
     echo $fileName;
     $content=Storage::disk('local')->put($fileName,'public');
    echo $request->file('image')->storeAs('public',$fileName);
    $add->image=$fileName;
      $add->save();
     }
    
  return redirect('image');
  }

  public function display3()
  {
      $data=profile::all();
      return view('image',compact('data'));
  }
}