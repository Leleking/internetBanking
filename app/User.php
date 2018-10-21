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
        'name', 'email', 'password','acct_num','pin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function userDetail(){
        return $this->hasOne('App\model\userDetail');
    }
    public function account(){
        return $this->hasOne('App\model\account');
    }
    public function transaction(){
        return $this->hasMany('App\model\transaction');
    }
    public function isAdmin(){
        return $this->isAdmin;
    }
    
}
