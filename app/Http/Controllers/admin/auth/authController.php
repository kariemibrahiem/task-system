<?php

namespace App\Http\Controllers\admin\auth;

use App\Events\WelcomeUser;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequests;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    //the login part 
    public function login(){ 
        return view('auth.login');
    }
    public function login_save(UserRequests $request){
        $email = $request->email;
        $password = $request->password;
        $type_user = 1;
        $credentials = $request->only('email', 'password' , 'type_user');
        if( auth::attempt($credentials)){
            if(Auth::user()->type_user == 1){
                return redirect()->route('admin.home');
            }
                return redirect()->route('web.home');
        }else{
            return redirect()->route('regist');
        }
        
    }
    //the end of login part



    // the registeration part
    public function regist(){
        return view('auth.regist');
    }
    public function regist_save(UserRequests $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password =  $request->password;
        $user->save();        
        return redirect()->route('users');
    }
    //the end of regist part


    //the logout part
    public function logout(){
        Auth::logout();
        return redirect()->route('auth.login');
    }


    
}

