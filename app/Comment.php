<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content', 'post_id', 'user_id'];

    //create relations in database to post
    public function post(){
        return $this->belongsTo('App\Post');
    }

    //create relations in database to user
    public function user(){
        return $this->belongsTo('App\User');
    }

}