<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1555355612782UsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('session_id')->nullable();
            $table->string('name');
            $table->string('user_name',50)->unique()->nullable();
            $table->string('email')->unique();
            $table->datetime('email_verified_at')->nullable();
            $table->datetime('last_login')->nullable(); 
            $table->string('ip',20)->nullable();        
            $table->timestamp('blocked_date')->nullable();
            $table->boolean('active')->default(1);
            $table->string('password');
            $table->string('remember_token')->nullable();
            $table->timestamps();
            $table->softDeletes();

        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
