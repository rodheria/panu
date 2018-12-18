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
        $categories = ["Buscado", "Encontrado", "En adopcion", "En transito"];

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'role' => 9
        ]);

        foreach($categories as $category){
            DB::table('categories')->insert(['name' => $category]);
        }

        $users = factory(App\User::class, 50)->create();
        $posts = factory(App\Post::class, 100)->create();
        $comments = factory(App\Comment::class, 300)->create();

        
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
