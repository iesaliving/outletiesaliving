<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradeMarksTable extends Migration
{
   
    public function up()
    {
        Schema::create('trade_marks', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('active')->default(1);
            $table->string('name',100)->unique();
            $table->string('slug',100)->unique();
            $table->string('logo')->nullable();
            $table->string('logo_txt')->nullable();
            $table->mediumText('intro')->nullable();
            $table->string('social_network')->nullable();
            $table->string('social_img')->nullable();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('trade_marks');
    }
}
