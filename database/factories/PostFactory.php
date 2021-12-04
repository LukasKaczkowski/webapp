<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\UserProfile;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     * 
     * @return array
     */
    public function definition()
    {
        $numberOfUserProfiles = UserProfile::count();
        return [
            //Generate random data using faker. Username has to be unique.
            'posterid'=>$this->faker->numberBetween(1,$numberOfUserProfiles),
            'title'=>$this->faker->realText(20,1),
            'contents'=>$this->faker->realText(200,1),
            'upvotes'=>$this->faker->randomDigit,
        ];
    }
}
