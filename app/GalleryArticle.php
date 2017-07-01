<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryArticle extends Model
{
    //
    protected $table='gallery_article';
    protected $fillable=['title','content','image','user_id','watch_count','price','description','image_xs'];


    public function user(){
    	return $this->belongsTo('App\User','user_id','id');
    }
    public function ownReply(){
    	return $this->hasMany('App\GalleryReply','article_id','id');
    }

}
