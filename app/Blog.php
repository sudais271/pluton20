<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function votes()
    {
        return $this->hasMany('App\Upvote');
    }
    protected $fillable = [
        'title', 'description', 'filename', 'mime' ,'original_filename', 'user_id','featured', 'category_id', 'tags'
    ];
}
