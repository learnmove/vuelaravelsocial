<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->integer('user_id');
            $table->string('blog_title')->default('myblog');
            $table->string('banner')->default('https://scontent-tpe1-1.xx.fbcdn.net/v/t1.0-9/17362562_1439964182692184_1634433238124984600_n.jpg?oh=9c0d2080b0e2a971f200a4ab6bc776cb&oe=59C772A5');
            $table->string('css')->default('yellow');
            $table->string('music')->default('https://ia600502.us.archive.org/33/items/03YoungAndBeautiful/03%20Young%20and%20Beautiful.mp3');
            $table->string('music_name')->default('Lana Del Rey-young and beautifyl');
            $table->string('banner_title')->default('我的部落格');
            $table->string('banner_text')->default('歡迎');
            $table->boolean('status')->default('1');
            $table->integer('visited_count')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('blog');
  
    }
}
