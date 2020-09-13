<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upvote extends Model
{
    protected $fillable = [
        'blog_id', 'upvote', 'downvote','user_id'
    ];
}
