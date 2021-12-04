<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\UserProfile;

class UserProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     * 
     * @return array
     */
    public function definition()
    {
        return [
            //Generate random data using faker. Username has to be unique.
            'username'=>$this->faker->unique()->userName,
            'password'=>$this->faker->password,
            'email'=>$this->faker->email,
            'karma'=>$this->faker->randomDigit
        ];
    }
}
