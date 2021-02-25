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
        'name', 'email', 'password','avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function downloadables(){
        return $this->hasOne(Downloadable::class);
    }
    public function data(){
        return $this->hasOne(Data::class);
    }
    public function keluargas(){
        return $this->hasMany(Keluarga::class);
    }
    public function pendidikans(){
        return $this->hasMany(Pendidikan::class);
    }
    public function pelatihans(){
        return $this->hasMany(Pelatihan::class);
    }
    public function prestasis(){
        return $this->hasMany(Prestasi::class);
    }
    public function bahasas(){
        return $this->hasMany(Bahasa::class);
    }
    public function organisasis(){
        return $this->hasMany(Organisasi::class);
    }
    public function talentas(){
        return $this->hasMany(Talenta::class);
    }
    public function penghasilans(){
        return $this->hasOne(Penghasilan::class);
    }
}
