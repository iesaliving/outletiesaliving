<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('active')->default(1);
            $table->string('name',100)->unique();
            $table->string('slug',100)->unique();
            $table->string('logo')->nullable();
            $table->string('logo_txt')->nullable();
            $table->mediumText('intro')->nullable();
            $table->string('social_network')->nullable();
            $table->string('social_img')->nullable();
            $table->string('social_txt')->nullable();
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('brands');
    }
}
