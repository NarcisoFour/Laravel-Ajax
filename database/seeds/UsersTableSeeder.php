<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'NarcisoFour',
            'email' => 'NarcisoFour@gmail.com',
            'password' => bcrypt('secret'),
            'remember_token' => str_random(10),
        ]);
        factory(User::class, 9)->create();
    }
}
