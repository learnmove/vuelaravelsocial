<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'account' => $faker->userName,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'company'=>$faker->company,
        'age'=> $faker->numberBetween(20,50),
        'status'=>$faker->numberBetween(0,1),
        'username'=>$faker->name,
        'designer'=>$faker->name,
        // 'ip'=>$faker->ipv4,
        'location'=>$faker->state,

    ];
});

$factory->define(App\UserInfo::class,
    function(Faker\Generator $faker){

    return [
        'ip'=>$faker->ipv4,
        'online'=>Carbon\Carbon::now()

    ];

});

$factory->define(App\Blog::class,
    function(Faker\Generator $faker){

    return [
        'blog_title'=>$faker->userName

    ];

});
$factory->define(App\BlogArticle::class,

    function(Faker\Generator $faker){
        return [
            'title'=>$faker->sentence,
            'content'=>$faker->paragraph
        ];
    }
    );