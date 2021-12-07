<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create comment by 2nd user on 1st post using manual data entry.
        $firstComment = new Comment;
        $firstComment->user_id = 2;
        $firstComment->post_id = 1;
        $firstComment->message = "First!";
        $firstComment->score = 2;
        $firstComment->save();

        $comments = Comment::factory()->count(50)->create();
    }
}
