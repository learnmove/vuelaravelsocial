<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogarticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_article', function (Blueprint $table) {
            $id=$table->increments('id');
            $table->integer('user_id');
            
            $table->string('title');
            $table->string('article_site')->default(md5(uniqid().rand(1,1000)));
            $table->string('future_post')->nullable();
            $table->text('content')->nullable();
            $table->string('secret')->nullable();
            $table->string('image')->nullable();
            $table->integer('watch_count')->default('0');
            $table->boolean('status')->default('1');
            $table->string('hint')->nullable();
            $table->timestamps();
            $table->index(['article_site', 'user_id']);


            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_article');
    }
}
