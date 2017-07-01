<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryLike extends Model
{
    //
      protected $fillable=['user_id','like','article_id'];
    protected $table='gallery_like';
}
