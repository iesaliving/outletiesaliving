<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadquartersTable extends Migration
{
    
    public function up()
    {
        Schema::create('headquarters', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('active')->default(1);
            $table->string('name',100)->unique();
            $table->string('address',200);
            $table->string('phone',100)->nullable();
            $table->string('email',100)->nullable();
            $table->string('schedule',250)->nullable();
            $table->string('map',250)->nullable();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('headquarters');
    }
}
