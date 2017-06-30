<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiscussArticleReply extends Model
{
    //
   
	protected $table='discuss_article_reply';
	protected $fillable=['article_id','user_id','content'];
	public function belongArticle(){

	}
	public function discussReplytUser(){
		return $this->belongsTo('App\User','user_id','id');
	}
}
