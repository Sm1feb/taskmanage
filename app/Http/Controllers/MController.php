<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reg;
use App\Models\Com;
Use Session;
class MController extends Controller
{
    //
    public function fm(Request $request)
    {
        $add = new reg;
        if($request->isMethod('post'))
    {
             $add->email=$request->get('email');
        $add->pass=$request->get('pass');
        $add->save();
         
    }
    return redirect("/login");
}
public function sfm(Request $request)
{
    $email =$request->get('email');
   
    $count = reg::select('*')
        ->where('email', $email)
       
        ->count();
    if ($count > 0) {
        session()->put("user_session", $email);
        return redirect("index");
       
    }
    else
    {
        return redirect("login");
    }
}
// public function comment1(Request $request)
// {
//         $add = new Com;
//         if($request->isMethod('post'))
//         {

//             $add->comment=$request->get('comment');
           
//             $add->user_id = $request->get('post');
//             $add->user = $request->get('user');
//             $add->save();

//         }
//         return redirect("/index");
// }
//-----logout In site -----
public function logout()
{
 Session::flush();
return redirect('register');
}
public function comment2(Request $request)
{
        $add = new Com;
        if($request->isMethod('post'))
        {

            $add->comment=$request->get('comment');
            $add->user = $request->get('name');
            $add->user_id = $request->get('post');
            $add->save();

        }
        return redirect("/index");
}
}
