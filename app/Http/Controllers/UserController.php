<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Hash;
use Session;
use Auth;


class UserController extends Controller
{  

    public function changeLanguage($language){

      Session::put('language', $language);

      return redirect()->back();
      
    }

    public function Login(){

       return view('admin.authentication.login');

    }

    public function getLogin(Request $request){
         $this->validate($request,[
          'username'=>'required',
          'password'=>'required|min:5|max:20'
        ],
        [
          'username'=>'Hãy nhập email',
          'password.min'=>'Mật khẩu tối đa 5 ký tự',
          'password.max'=>'Mật khẩu không quá 20 ký tự'
        ]);

         $check = array('email'=>$request->username,'password'=>$request->password);

         if(Auth::attempt($check)){
          Session::put('userid',Auth::user()->id);
          Session::put('username',Auth::user()->name);
          Session::put('userrole',Auth::user()->role);
          return redirect()->route('admin.home');

        }else{

         return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập thất bại. Sai tài khoản hoặc mật khẩu']);

       }   
    }

    public function Logout(){
       Auth::logout();
       Session::forget('userid');
       Session::forget('username');
       return redirect()->route('login');
    }
}
