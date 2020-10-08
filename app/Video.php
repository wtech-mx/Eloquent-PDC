<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function user()
    {
                    //Pertenece a
        return $this->belongsTo(User::class);

    }

    public function category()
    {               //Pertenece a
        return $this->belongsTo(Category::class);

    }

    public function comments()
    {
                    //polimorfico
                    //Tiene muchos comentarios
        return $this->morphMany(Comment::class,'commentable');
    }

    public function image()
    {                //polimorfico
                    //Tien una imagen
        return $this->morphOne(Image::class,'imageable');
    }

    public function tags()
    {                //polimorfico
                     //muchas etiqeuteas
        return $this->morphToMany(Tag::class,'taggables');
    }
}
