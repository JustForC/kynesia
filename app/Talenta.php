<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talenta extends Model
{
    //
    protected $fillable = ['*'];

    public function user(){
        return $this->belongsTo('users');
    }
}
