<?php

use Illuminate\Database\Seeder;
use App\Models\Users;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        Users::create([
            'prefix_id' => 1,
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'room' => rand(201, 205),
            'work_status' => 1,
            'username' => 'user1',
            'password' => bcrypt('1234'),
            'email' => $faker->email,
            'line_id' => 'line_id_demo'
        ]);
    }
}
