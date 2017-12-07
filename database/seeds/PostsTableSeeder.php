<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new App\Post();
        $post->title = "Mi primer post";
        $post->excerpt = "Extracto de mi primer post";
        $post->body = "<p>Contenido de mi primer post</p>";
        $post->published_at = Carbon::now()->subDay();
        $post->category_id = random_int(1, 3);
        $post->save();

        $post = new App\Post();
        $post->title = "Mi segundo post";
        $post->excerpt = "Extracto de mi segundo post";
        $post->body = "<p>Contenido de mi segundo post</p>";
        $post->published_at = Carbon::now();
        $post->category_id = random_int(1, 3);
        $post->save();
    }
}
