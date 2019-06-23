<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //create relation in database to posts
    public function posts(){
        return $this->belongsToMany('App\Post')->withTimestamps();
    }
}
