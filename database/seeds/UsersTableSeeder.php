<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'ittruong23',
            'email' => 'ittruong23@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
