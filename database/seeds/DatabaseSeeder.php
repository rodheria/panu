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
        $users = factory(User::class)->times(20)->create();
        $categories = factory(Category::class)->times(5)->create();
        $posts = factory(Post::class)->times(50)->create([
            'user_id' => $users->random(),
            'category_id' => $categories->random()
        ]);


        // $movies->each( function($movie) use ($actors) {
        //     // $movie es una instancia de Movie
        //     // actors() es un metodo del modelo Movie (belongsToMany())

        //     // $actors es una collection, y random(3) devuelve una collection de 3 actores

        //     $movie->actors()->saveMany($actors->random(3));
        // });
    }
}
