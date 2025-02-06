<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostTwo extends Model
{
    protected $table = 'post_two';
    public function tags(){
        return $this->morphToMany(Tag::class,'taggable');
    }
}
