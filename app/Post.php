<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments()
    {
      //Relationship, a project post has many comments
        return $this->hasMany('App\Comment');
    }
}
