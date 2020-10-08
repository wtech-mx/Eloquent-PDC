<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts()
    {                //polimorfico
                     //mucho a muchos
        return $this->morphedByMany(Post::class,'taggables');
    }

    public function videos()
    {                //polimorfico
                     //mucho a muchos
        return $this->morphedByMany(Video::class,'taggables');
    }
}
