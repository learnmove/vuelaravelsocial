<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class,15)->create()->each(

            function($u){

         $u->userinfo()->save(factory(App\UserInfo::class)->make());
         $u->blog()->save(factory(App\Blog::class)->make());
     
         //使用者會有文章

         for($i=1;$i<15;$i++){
               $user_article=$u->blog_article()->save(
         factory(App\BlogArticle::class)->make());
  $reply=factory(App\BlogArticleReply::class)->make();
        $reply->blog_user_id=$u->id;
         $user_article->replies()->save($reply);

sleep(1);



         }
     


         // $user_article=$u->blog_article()->save(factory(App\BlogArticle::class)->make()); 




          //使用者文章會有回覆
         // 1.可行
        // $reply=factory(App\BlogArticleReply::class)->make();
        // $reply->blog_user_id=$u->id;
        //  $user_article->replies()->save($reply);






    
        


        }
        );



    }
}
