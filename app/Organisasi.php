<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
    //
    protected $fillable=['*'];

    public function user(){
        return $this->belongsTo('users');
    }
}
