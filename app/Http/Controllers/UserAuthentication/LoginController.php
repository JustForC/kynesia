<?php

namespace App\Http\Controllers\UserAuthentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
use App\User;
use Auth;

class LoginController extends Controller
{
    //
    public function showLoginForm(){
        return view('user_authentication/login');
    }
    

    public function doLogin(Request $request){
        $request->only('email','password');
        $credentials=[
            'email' => $request->email,
            'password' => $request->password,
        ];
        if(Auth::guard()->attempt($credentials)){
            return redirect('/dashboard');
        }

        return 'Login Fail';

    }

    
    public function doLogout(){
        Auth::logout();
        return redirect('/login');
    }
}
