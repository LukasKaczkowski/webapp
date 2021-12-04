<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use App\Models\UserProfile;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     * 
     * @return array
     */
    public function definition()
    {
        $numberOfPosts = Post::count();
        $numberOfUsers = UserProfile::count();
        return [
            //Generate random data using faker. Username has to be unique.
            'commenterid'=>$this->faker->numberBetween(1,$numberOfUsers),
            'postid'=>$this->faker->numberBetween(1,$numberOfPosts),
            'message'=>$this->faker->realText(10,1),
            'score'=>$this->faker->randomDigit,
        ];
    }
}