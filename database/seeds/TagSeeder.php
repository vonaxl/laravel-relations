<?php

use Illuminate\Database\Seeder;
use App\Tag;
use App\Post;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Tag::class, 50) -> create() ->each(function($tag) {
            $posts = Post::inRandomOrder() ->take(rand(0,6)) ->get();
            $tag -> posts() ->sync($posts);
        });
    }
}
