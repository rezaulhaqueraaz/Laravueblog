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
            'role_id'=>'1',
            'name'=>'Admin',
            'email'=>'admin@lara.com',
            'password'=>bcrypt('12345678'),

        ]);
        DB::table('users')->insert([
            'role_id'=>'2',
            'name'=>'Author',
            'email'=>'author@lara.com',
            'password'=>bcrypt('12345678'),

        ]);
    }
}
