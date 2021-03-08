<?php

namespace App\Http\Controllers\UserAuthentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;

class RegisterController extends Controller
{

    
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    public function showRegisterForm()
    {
        return view('user_authentication.signup');
    }
    
    public function doRegister(Request $request)
    {
        // $email = 'ghemaallan@gmail.com';
        // $password = 'sadfsdagfsafasd';
        Validator::make($request->all(),[
            'email' => ['required', 'string', 'email', 'max:255',],
            'password' => ['required','confirmed','string', 'min:8',],
        ])->validate();

        User::create([
            'email' => $request->email,
            'avatar' => $request->avatar,
            'password' => Hash::make($request->password),
        ]);

        return view('user_authentication/login');


    }


    

}
