<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryReply extends Model
{
    //
    protected $table='gallery_reply';
    protected $fillable=['user_id','like','content','article_id'];
 
      public function user(){
    	return $this->belongsTo('App\User','user_id','id');
    }
}
