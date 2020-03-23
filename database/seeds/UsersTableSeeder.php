<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'Md Admin',
            'username' => 'Md Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'about' => 'adminer account bro',
         ]);

         DB::table('users')->insert([
            'name' => 'Author Mia',
            'username' => 'author1',
            'email' => 'author1@gmail.com',
            'password' => bcrypt('password'),
            'about' => 'author hishabe reg kora account bro',
         ]);
    }
}
