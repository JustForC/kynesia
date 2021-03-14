<?php

namespace App\Http\Controllers\UserAuthentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
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
        $validator=Validator::make($request->all(),[
            'email' => ['required', 'string', 'email', 'max:255',],
            'password' => ['required','confirmed','string', 'min:8',],
        ]);

        if($validator->fails()){
            return redirect('/register')
                    ->with('status','Password harus 8 character');
        }

        User::create([
            'email' => $request->email,
            'avatar' => $request->avatar,
            'password' => Hash::make($request->password),
        ]);

        return view('user_authentication/login');


    }


    

}
