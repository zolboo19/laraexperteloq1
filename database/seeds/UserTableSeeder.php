<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Article;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(User::class, 50)->create();
        factory(User::class, 50)->create()->each(function($user){
            $user->articles()->saveMany(factory(Article::class, 5)->make());
        });
    }
}
