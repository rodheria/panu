<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\User;
use App\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(App\User::class, 50)->create();
        $posts = factory(App\Post::class, 100)->create();


        
        // factory(App\Post::class, 50)->create()->each(function ($post) {
        //     $post->user()->save(factory($users->random(1)->first()->id)->make());
        // });

        // $posts = factory(App\Post::class, 5)->create()->each(function ($post) {
        //         dd($post);
                
        //         // $post->user()->save(factory(App\User::class)->make());
        //     });

        // foreach($posts as $post){
        //     $post->user()->associate($users->random(1)->first());
            
        //     $product->save();
        // }
    }
}
