<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('settings')->insert(array(
            'key' => 'site_title',
            'value' => env('SITE_TITLE', 'Laravel Site'),
            'description' => 'Título do Site',
            'created_at' => DB::raw('NOW()'),
            'created_by' => 88
        ));    
    }
}
