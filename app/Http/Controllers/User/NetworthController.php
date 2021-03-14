<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NetworthController extends Controller
{
    //
    public function showForm(){
        return view('user/keuangan');
    }

    public function doInput(Request $request){
        $validator = Validator::make($request->all(),[
            'networth' => ('required'),
            'family_status' => ('required'),
            'name' => ('required'),
            'sex' => ('required'),
            'birthplace' => ('required'),
            'birthdate' => ('required'),
            'education' => ('required'),
            'job' => ('required'),
            'status' => ('required'),
        ]);

        if($validator->fails()){
            var_dd($request->all());
            return "Boohooo";
        }




    }
}
