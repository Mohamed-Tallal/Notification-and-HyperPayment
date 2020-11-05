<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
        'name', 'email', 'password',
    ];


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
     public function orders()
        {
            return $this->hasMany('App\Order', 'user_id', 'id');
        }
    public function posts(){
        return $this->hasMany('App\Post','post_id');
    }
    public function commets(){
        return $this->hasMany('App\Commet','user_id');
    }
}

