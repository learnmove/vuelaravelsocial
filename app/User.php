<?php

namespace App;
use DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'account',
            'email',
            'password',
            'company',
            'age',
            'username',
            'designer',
            'gender',
            'location',
            'zodiac',
            'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function userinfo(){
        return $this->hasOne('App\UserInfo');

    }
    public function blog(){
        return $this->hasOne('App\Blog');

    }
    public function blog_article(){
        return $this->hasMany('App\BlogArticle');
    }
    public function visitersOfMine(){


         return   $this->belongsToMany('App\User','visit','user_id','visiter_id')->withPivot('created_at','visiter_id','id')->limit(30);
    }
    public function getLatestVisiter(){

       return $this->visitersOfMine()->orderBy('pivot_created_at','desc')->get()->unique();
    }
    public function replies(){
        return $this->hasMany('App\BlogArticleReply');
    }
    public function owner_replies(){
          return $this->hasMany('App\BlogArticleReply','blog_user_id','id');
    }
    public function mood(){
        return $this->hasMany('App\Mood');
    }
    public function write_discuss_article(){
         return $this->hasMany('App\DiscussArticle');

    }
    public function write_discuss_reply(){
       return  $this->hasMany('App\DiscussArticleReply');
    }
    public function gallery(){
        return $this->hasMany('App\GalleryArticle');
    }
    public function write_gallery_reply(){
        return $this->hasMany('App\GalleryReply');
    }


}
