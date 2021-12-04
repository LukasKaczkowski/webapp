<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create post by 'admin' user (id 1) using manual data entry.
        $adminPost = new Post;
        $adminPost->posterid = 1;
        $adminPost->title = "My first post";
        $adminPost->contents = "Hello everyone, this is my first post!";
        $adminPost->upvotes = 10;
        $adminPost->save();

        $posts = Post::factory()->count(20)->create();
    }
}
