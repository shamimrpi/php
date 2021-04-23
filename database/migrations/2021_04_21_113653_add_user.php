<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

use App\User;
class AddUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $user = [
            'name' => 'Shamim Miah',
            'email' => 'shamim520386@gmail.com',
            'password' => Hash::make('12345678'),
            'about' => 'Rangpur',
            'image' => ''
        ];
        User::create($user);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
