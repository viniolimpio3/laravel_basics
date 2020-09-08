<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('users')->insert(array(
            'id' => 88,
            'name' => 'admin',
            'email' => 'vinberteam@gmail.com',
            'password' => 1234,
            'status' => 1,
            'level' => 1,
            'created_at' => DB::raw('NOW()'),
        ));    
    }
}
