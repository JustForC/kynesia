<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email','password','avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function downloadable(){
        return $this->hasOne(Downloadable::class);
    }
    public function socialmedia(){
        return $this->hasOne(SocialMedia::class);
    }
    public function data(){
        return $this->hasOne(Data::class);
    }
    public function networth(){
        return $this->hasOne(Networth::class);
    }
    public function educations(){
        return $this->hasMany(Education::class);
    }
    public function families(){
        return $this->hasMany(Family::class);
    }
    public function languages(){
        return $this->hasMany(Language::class);
    }
    public function organizations(){
        return $this->hasMany(Organization::class);
    }
    public function talents(){
        return $this->hasMany(Talent::class);
    }
    public function trainings(){
        return $this->hasMany(Training::class);
    }
    public function achievements(){
        return $this->hasMany(Achievement::class);
    }

}
