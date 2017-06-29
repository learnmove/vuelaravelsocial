<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogArticle extends Model
{
    //
    protected $table="blog_article";
    protected $fillable=[
           'id',
          'user_id',
           'title',
           'content',
           'secret',
           'hint',
           'article_site',
           'image',
           'watch_count',
           'status'
    ];
    public function user(){
     return	$this->belongsTo('App\User');
    }
    public function replies(){
     return  $this->hasMany('App\BlogArticleReply');
    }


}
