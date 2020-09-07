<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        try{
            DB::table('users')->insert(array(
                'name' => 'admin',
                'email' => env('USER_SEED_MAIL'),
                'password' => bcrypt('1234'),
                'status' => 1,
                'level' => 1,
                'created_at' => DB::raw('NOW()'),
            ));
        }catch(Exception $e){
            throw new Exception($e);
        }
            
    }
}
