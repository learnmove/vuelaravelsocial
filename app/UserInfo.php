<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    //
    protected $table='usersinfo';
    protected $fillable = [
    	'ip',
    	'online',
    	'offline',

    ];
    public $timestamps = false;
    public function user(){
    	$this->belongsTo('App\User');
    }
   
}
