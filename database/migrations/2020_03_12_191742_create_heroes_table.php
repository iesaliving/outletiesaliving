<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeroesTable extends Migration
{
    
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type',15)->comment('HERO','HEROM','LOGO');
            $table->string('source',15)->comment('HOME','SERVICIOS','MARCAS','FAQ');
            $table->string('url');
            $table->string('name')->nullable();
            $table->string('img_text')->nullable();
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
