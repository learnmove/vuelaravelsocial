<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DiscussArticleTags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discuss_article_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tag_name');
            $table->string('tag_value');
        });
        // 
            DB::table('discuss_article_tags')->insert(
            array(
                    
                     array('tag_name' => 'chat',
                     'tag_value' => '閒聊'),
                      array('tag_name' => 'career',
                     'tag_value' => '職場'),
                     array('tag_name' => 'outsourcing',
                     'tag_value' => '外包'),
                      array('tag_name' => 'job',
                     'tag_value' => '徵才'),
                      array('tag_name' => 'teach',
                     'tag_value' => '教學'),
                     array('tag_name' => 'knowledge',
                     'tag_value' => '技術'),
                      array('tag_name' => 'class',
                     'tag_value' => '開班'),
                      array('tag_name' => 'teacher',
                     'tag_value' => '家教'), 
                       array('tag_name' => 'trade',
                     'tag_value' => '交易'), 
                        array('tag_name' => 'Cooperation',
                     'tag_value' => '合作'), 

                 )
             );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discuss_article_tags');
    }
}
