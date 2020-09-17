<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upvote extends Model
{
    protected $fillable = [
        'blog_id', 'upvotes', 'downvotes'
    ];
}
