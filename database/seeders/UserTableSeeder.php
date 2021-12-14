<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create admin user using manual data entry.
        $admin = new User;
        $admin->name = 'admin';

        //Password is admin123
        $admin->password = '$2y$10$rkwgQbgXfzRVErX8s/KXU.RrMyB0DU8VbkkK2ehOJDnis6LGP8f0q';
        $admin->email = 'admin@gmail.com';
        $admin->score = 100;
        $admin->save();

        //Generate 10 other users using Faker.
        $users = User::factory()->count(10)->create();

    }
}
