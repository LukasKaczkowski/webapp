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
        $admin->name = "alice36";
        $admin->password = "password1";
        $admin->email = "alice.smith@gmail.com";
        $admin->karma = 100;
        $admin->isAdmin = true;
        $admin->save();

        //Generate 10 other users using Faker.
        $users = User::factory()->count(10)->create();

    }
}
