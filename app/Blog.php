<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //

    protected $table="blog";
    protected $fillable=[
    'id',
'user_id',
'banner',
'css',
'music',
'music_name',
'banner_title',
'blog_title',
'banner_text',
'status',


    ];


    public function user(){
    	$this->belongsTo('App\User','user_id','id');
    }

    public function article(){
    	$this->hasMany('App\BlogArticle');
    }
}
