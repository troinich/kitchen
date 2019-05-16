<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content'];

    //create relations in database to likes
    public function likes(){
        return $this->hasMany('App\Like');
    }
}