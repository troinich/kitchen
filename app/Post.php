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

    //create relations in database to tags
    public function tags(){
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    //create relations in database to users
    /* public function user(){
        return $this->belongsTo('App\User');
    }
    */

}