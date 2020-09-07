<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class createUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('status')->comment('1 - ativo\n2 - inativo');
            $table->integer('level')->comment('Nível de acesso do usuário');
            
            // $table->timestamp('created_at')->useCurrent();
            // $table->timestamp('updated_at')->useCurrent();

            $table->timestamp('last_access')->useCurrent();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('users');
    }
}
