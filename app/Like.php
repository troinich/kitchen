<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    //create relations likes-post
    public function post(){
        return $this->belongsTo(\App\Post);
    }
}
