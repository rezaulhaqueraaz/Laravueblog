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
            'email'=>'rhraz.bd@gmail.com',
            'password'=>bcrypt('12345678'),

        ]);
        DB::table('users')->insert([
            'role_id'=>'2',
            'name'=>'Author',
            'email'=>'sinraz.bd@gmail.com',
            'password'=>bcrypt('12345678'),

        ]);
    }
}
