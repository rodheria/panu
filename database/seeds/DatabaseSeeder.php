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
            'last_name' => 'Nimda',
            'genre' => random_int(0, 3),
            'province' => 0,
            'city' => 0,
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'role' => 9
        ]);

        foreach($categories as $category){
            DB::table('categories')->insert(['name' => $category]);
        }

        $users = factory(App\User::class, 20)->create();
        $posts = factory(App\Post::class, 325)->create();
        $comments = factory(App\Comment::class, 1000)->create();
    }
}
