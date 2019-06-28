<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Auth;
use Hash;
use App\User;
use Active;

class LivevideoController extends Controller
{
    //
    public function send(){
       // var_dump($_POST['type']);exit();
       
        $message = $_POST['message'];     
        $toUid = 'admin';       
        $platform = $_POST['plat'];   
    
        $res =  new Message();        
        $res->user_id =  Auth::user()->id;
        $res->type = $_POST['type'];
        $res->to_userid =  $toUid;
        $res->body =  $message;         
        $res->save();

        return $res;
    }

    public function vipvideo(){
        $user = Auth::user();
        $messages = Message::get();
        $online_users = Active::users()->get();
        return view('home.vipvideo')->with(compact('user','messages','online_users'));
    }

    public function profile_update(Request $request){

        $user = Auth::user();
        $old_passwd = $_POST['oldpwd'];
        $new_passwd = $_POST['pwd'];
        $name = $_POST['name'];
        $file = $request->file('pic');
        //var_dump($file);exit();
        $destinationPath =  'upload/images';
        $file->move($destinationPath,$file->getClientOriginalName());

        if(Hash::check($old_passwd, $user->password)){
            $user->name = $name;
            $user->avatar = 'images/'.$file->getClientOriginalName();
            $user->password = Hash::make($new_passwd);
            $user->save();
        }else{
            return redirect()->back()->withErrors(['旧密码错了.']);
        }

        return redirect()->back();
    }
}
