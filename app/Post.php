<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // creating a relationship Post & user
    // a Post belongs to a user 
    public function user(){
        return $this->belongsTo('App\User');
    }
}
