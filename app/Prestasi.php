<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    //
    protected $fillable = ['*'];

    public function user(){
        return $this->belongsTo('users');
    }
}
