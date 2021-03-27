<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Family;
use App\Networth;
use App\User;

class NetworthController extends Controller
{
    //
    public function showForm(){
        return view('user/datakeuangan');
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
            return redirect('/dashboard/datadiri')
                    ->with('status','Data anda kurang lengkap atau salah');
        }

        $name = $request->name;
        $family_status = $request->family_status;
        $sex = $request->sex;
        $birthplace = $request->birthplace;
        $birthdate = $request->birthdate;
        $education = $request->education;
        $job = $request->job;
        $status = $request->status;
        $size=count($name);

        for($i = 0;$i<$size;$i++){
            Family::insert([
                'user_id' => Auth::user()->id,
                'family_status' => $family_status[$i],
                'name' => $name[$i],
                'sex' => $sex[$i],
                'birthplace' => $birthplace[$i],
                'birthdate' => $birthdate[$i],
                'education' => $education[$i],
                'job' => $job[$i],
                'status' => $status[$i],
            ]);
        }

        Networth::insert([
            'user_id' => Auth::user()->id,
            'networth' => $request->networth,
        ]);
        if($validator->fails()){
            return redirect('/dashboard/datadiri')
                    ->with('status','Data anda kurang lengkap atau salah');
        }

        return redirect('/dashboard');


    }
}
