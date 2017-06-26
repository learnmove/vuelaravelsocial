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
         // for($i=1 ; $i<10;$i++){
         //          $u->blog_article()->save(factory(App\BlogArticle::class)->make());

         // }
     $u->blog_article()->save(factory(App\BlogArticle::class)->make());
        }
        );

    }
}
