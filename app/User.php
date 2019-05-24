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

    //create relation in database to roles
    public function roles(){
        return $this->belongsToMany('App\Role');
    }

    //assigning roles
    public function hasAnyRole($roles){
        if(is_array($roles)){
            foreach($roles as $role){
                if ($this->hasRole($role)){
                    return true;
                }
            }
        } else {
            if ($this->hasRole($roles)){
                return true;
            }
        }
        return false;
    }

    public function hasRole($role){
        return $this->roles()->where('name', $role)->first() ? true : false;
    }

    //create relation in database to comments
    public function comments(){
        return $this->hasMany('App\Comment');
    }
}