<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'Md. Shamim Miah',
        	'email' => 'shamim520386@gmail.com',
        	'password' => Hash::make('12345678'),
        	'role_id' => 2,
        	'about' => '',
        	'image' =>''

        ]);
    }
}
