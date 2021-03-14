<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Validator;
use App\Data;
use App\SocialMedia;
use App\User;
use Auth;

class DataPribadiController extends Controller
{
    //
    public function dashboard(){
        return view('user.dashboard');
    }
    public function showForm(){
        return view('user.datapribadi');
    }
    
    public function doInput(Request $request){

        //Untuk tempat tinggal sama dengan ktp
        $user=Auth::user()->id;
       if($request->checking_address == "same"){
           $validator = Validator::make($request->all(),[
               "name" => ('required'),
               "nickname" =>('required'),
               "sex" =>('required'),
               "birthplace" =>('required'),
               "birthdate" =>('required'),
               "telephone" =>('required'),
               "identity" =>('required'),
               "id_number" =>('required'),
               "address" =>('required'),
               "postal_code" =>('required'),
               "district" =>('required'),
               "city" =>('required'),
               "province" =>('required'),
               "entrance_type" =>('required'),
               "test_id" =>('required'),
               "university1" =>('required'),
               "major1" =>('required'),
               "university2" =>('required'),
               "major2" =>('required'),
               "university3" =>('required'),
               "major3" =>('required'),
               ]);
               if($validator->fails()){
                return redirect('/dashboard/datadiri')
                        ->with('status','Data anda kurang lengkap atau salah');
            }
            Data::insert([
                'user_id' => $user, 
                'name' => $request->name,
                'nickname' => $request->nickname,
                'sex' => $request->sex,
                'birthplace' => $request->birthplace,
                'birthdate' => $request->birthdate,
                'telephone' => $request->telephone,
                'id_type' => $request->identity,
                'id_number' => $request->id_number,
                'address' => $request->address,
                'postal_code' => $request->postal_code,
                'district' => $request->district,
                'city' => $request->city,
                'province' => $request->province,
                'living_address' => $request->address,
                'living_code' => $request->postal_code,
                'living_district' => $request->district,
                'living_city' => $request->city,
                'living_province' => $request->province,
                'entrance_type' => $request->entrance_type,
                'test_id' => $request->test_id,
                'major1' => $request->major1,
                'university1' => $request->university1,
                'major2' => $request->major2,
                'university2' => $request->university2,
                'major3' => $request->major3,
                'university3' => $request->university3,
            ]);
            SocialMedia::insert([
                'user_id' => $user,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram,
                'youtube' => $request->youtube,
                'tiktok' => $request->tiktok,
            ]);
            User::where('id','=',Auth::user()->id)
            ->update([
                "name" => $request->name,
                "status1" => "Sedang Diseleksi"
            ]);

            return redirect('/dashboard');
       }

       //Untuk tempat tinggal tidak sama dengan ktp
       $validator = Validator::make($request->all(),[
        "name" => ('required'),
        "nickname" =>('required'),
        "sex" =>('required'),
        "birthplace" =>('required'),
        "birthdate" =>('required'),
        "telephone" =>('required'),
        "identity" =>('required'),
        "id_number" =>('required'),
        "address" =>('required'),
        "postal_code" =>('required'),
        "district" =>('required'),
        "city" =>('required'),
        "province" =>('required'),
        "living_address" =>('required'),
        "living_code" =>('required'),
        "living_district" =>('required'),
        "living_city" =>('required'),
        "living_province" =>('required'),
        "entrance_type" =>('required'),
        "test_id" =>('required'),
        "university1" =>('required'),
        "major1" =>('required'),
        "university2" =>('required'),
        "major2" =>('required'),
        "university3" =>('required'),
        "major3" =>('required'),
        ]);
        if($validator->fails()){
            return redirect('/dashboard/datadiri')
                    ->with('status','Data anda kurang lengkap atau salah');
        }
        Data::insert([
            'user_id' => $user, 
            'name' => $request->name,
            'nickname' => $request->nickname,
            'sex' => $request->sex,
            'birthplace' => $request->birthplace,
            'birthdate' => $request->birthdate,
            'telephone' => $request->telephone,
            'id_type' => $request->identity,
            'id_number' => $request->id_number,
            'address' => $request->address,
            'postal_code' => $request->postal_code,
            'district' => $request->district,
            'city' => $request->city,
            'province' => $request->province,
            'living_address' => $request->living_address,
            'living_code' => $request->living_code,
            'living_district' => $request->living_district,
            'living_city' => $request->city,
            'living_province' => $request->province,
            'entrance_type' => $request->entrance_type,
            'test_id' => $request->test_id,
            'major1' => $request->major1,
            'university1' => $request->university1,
            'major2' => $request->major2,
            'university2' => $request->university2,
            'major3' => $request->major3,
            'university3' => $request->university3,
        ]);
        SocialMedia::insert([
            'user_id' => $user,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube,
            'tiktok' => $request->tiktok,
        ]);
        User::where('id','=',Auth::user()->id)
            ->update([
                "name" => $request->name,
                "status" => "Sedang Diseleksi",
            ]);

       return redirect('/dashboard');
    }
}
