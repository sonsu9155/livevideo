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
       
        $active_users = Active::users()->get();
        
        foreach($active_users as $active_user){
            $res =  new Message();        
            $res->user_id =  Auth::user()->id;
            $res->type = $_POST['type'];
            $res->to_userid =  $active_user->user->id;
            $res->body =  $message;         
            $res->save();
        }
        //
        $res_admin =  new Message();        
        $res_admin->user_id =  Auth::user()->id;
        $res_admin->type = $_POST['type'];
        $res_admin->to_userid =  $toUid;
        $res_admin->body =  $message;         
        $res_admin->save();
        //var_dump(Auth::user()->id);exit();
        $res_user = Message::where('to_userid', Auth::user()->id)->first();   

        $res_del = Message::where('to_userid', Auth::user()->id)->latest()->delete();
        $res_user->user_name =Auth::user()->name;
        return $res_user;
    }

    public function show(){
        $user = Auth::user();
        $messages = Message::where('to_userid', $user->id)->get();
        foreach($messages as $message){
            $user_from = User::find($message->user_id);
            $message->user_name = $user_from->name;
            $message->delete();
        }

        return $messages;
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
