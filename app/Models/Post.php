<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = ['title', 'content'];



    public function comment()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
