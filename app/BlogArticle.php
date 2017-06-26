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
           'image',
           'watch_count',
           'status'
    ];
    public function user(){
    	$this->belongsTo('App\User');
    }

}
