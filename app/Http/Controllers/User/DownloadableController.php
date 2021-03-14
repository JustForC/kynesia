<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DownloadableController extends Controller
{
    //
    public function showForm(){
        return view('user/downloadable');
    }

    public function doInput(Request $request){
        $validator = Validate::make($request->all(),[
            'id' => ('required'),
            'ijazah' => ('required'),
            'bukti' => ('required'),
            'photo' => ('required'),
            'motivation_letter' => ('required'),
        ]);

        if($validator->fails()){
            var_dump($request->all());
            return 'You fail big boy';
        }
        $id ;
        $ijazah;
        $bukti;
        $photo;
        $motivation_letter;


        Downloadable::create([
            'user_id' => Auth::user()->id,
            'ktp' => $id,
            'ijazah' => $ijazah,
            'perguruan_tinggi' => $bukti,
            'pas_foto' => $photo,
            'motivation_letter' => $motivation_letter,
        ]);
    }
}
