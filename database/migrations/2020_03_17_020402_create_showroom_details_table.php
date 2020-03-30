<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowroomDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showroom_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('showroom_id')->nullable();
            $table->string('title',100)->nullable();
            $table->mediumText('description')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('showroom_details');
    }
}
