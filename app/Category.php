<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model

{
    //Representa la relacion entre categorias  y post
    public function posts()
    {
        // tiene muchas
        return $this->hasMany(Post::class);

    }

    public function videos()
    {
        return $this->hasMany(Video::class);

    }
}
