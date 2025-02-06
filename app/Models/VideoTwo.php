<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoTwo extends Model
{
    protected $table = 'video_two';
    public function tags(){
        return $this->morphToMany(Tag::class,'taggable');
    }
}
