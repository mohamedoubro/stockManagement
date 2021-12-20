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
        'name', 'email', 'password',
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

    public function categories(){
        return $this->hasMany('App\Category','id');
    }
    public function products(){
        return $this->hasMany('App\Product','id');
    }
    public function providers(){
        return $this->hasMany('App\Provider','id');
    }
    public function sells(){
        return $this->hasMany('App\Sell','id');
    }
    public function commands(){
        return $this->hasMany('App\Command','id');
    }
    public function companies(){
        return $this->hasMany('App\Company','id');
    }

}
