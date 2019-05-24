<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //create relation in database to user
    public function users(){
        return $this->belongsToMany('App\User');
    }
}
