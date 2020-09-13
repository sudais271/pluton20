<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable = [
        'blog_id', 'upvote', 'downvote','user_id'
    ];
}
