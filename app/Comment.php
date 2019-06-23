<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content', 'user_id'];

    //create relations in database to user
    public function user(){
        return $this->belongsTo('App\User');
    }

}