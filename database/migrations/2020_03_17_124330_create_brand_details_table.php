<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandDetailsTable extends Migration
{
    
    public function up()
    {
        Schema::create('brand_details', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('active')->default(1);
            $table->unsignedInteger('brand_id');
            $table->string('image')->nullable();
            $table->string('title',100)->nullable();
            $table->mediumText('description')->nullable();
            $table->tinyInteger('features')->default(0);
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('brand_details');
    }
}
