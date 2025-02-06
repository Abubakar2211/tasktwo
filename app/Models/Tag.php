<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function postTwos()
    {
        return $this->morphedByMany(PostTwo::class, 'taggable');
    }

    public function videoTwos()
    {
        return $this->morphedByMany(VideoTwo::class, 'taggable');
    }
}
