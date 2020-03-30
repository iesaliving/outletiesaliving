<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradeMarkDetailsTable extends Migration
{
   
    public function up()
    {
        Schema::create('trade_mark_details', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('active')->default(1);
            $table->unsignedInteger('trade_marks_id')->nullable();
            $table->string('image')->nullable();
            $table->string('title',100);
            $table->mediumText('description')->nullable();
            $table->tinyInteger('features')->default(0);
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('trade_mark_details');
    }
}
