<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'role_id'=>1,
        	'name'=>'Md. Suman Reza',
        	'username'=>'admin',
        	'email'=>'rezasumon71@gmail.com',
        	'password'=>bcrypt('abc123')
        ]);
        DB::table('users')->insert([
        	'role_id'=>2,
        	'name'=>'Tasnima Monwar',
        	'username'=>'author',
        	'email'=>'tasnimamonwar15@gmail.com',
        	'password'=>bcrypt('abc123')
        ]);
    }
}
