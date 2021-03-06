<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable,HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    // public function role(){
    //     return $this->belongsTo('App\Role');
    // }

    public function item(){
        return $this->hasMany('App\Item');
    }

    public function avatar()
    {
        return 'http://www.gravatar.com/avatar/'.md5($this->email).'?s=45&d=mm';
    }
}
