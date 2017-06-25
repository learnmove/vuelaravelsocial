<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'account',
            'email',
            'password',
            'company',
            'age',
            'username',
            'designer',
            'gender',
            'location',
            'zodiac',
            'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function userinfo(){
        return $this->hasOne('App\UserInfo');

    }
    public function blog(){
        return $this->hasOne('App\Blog');

    }
}
