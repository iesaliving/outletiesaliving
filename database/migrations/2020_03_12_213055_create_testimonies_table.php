<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimoniesTable extends Migration
{
    
    public function up()
    {
        Schema::create('testimonies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('active')->default(1);
            $table->string('image')->nullable();
            $table->string('name',100);
            $table->mediumText('text');
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('testimonies');
    }
}
