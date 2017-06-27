<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogArticleReply extends Model
{
    //
    protected $table='blog_article_reply';
    protected $fillable=['content','private'];
    public $timestamps=true;
    public function article(){
      return $this->belongsTo('App\BlogArticle','blog_article_id','id');
    }
    public function user(){
    	return $this->belongsTo('App\User','user_id','id');
    }
}
