<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post()
    {
      //Relationship of a comment belongs to one post
        return $this->belongsTo('App\Post');
    }
}
