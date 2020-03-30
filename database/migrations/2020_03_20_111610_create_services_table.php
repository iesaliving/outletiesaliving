<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',100);
            $table->text('description')->nullable();

            $table->string('imag_st')->nullable();
            $table->string('title_st',100)->nullable();
            $table->text('description_st')->nullable();
            $table->string('telf_st',100)->nullable();
            $table->string('telw_st',100)->nullable();
            $table->string('email_st',100)->nullable();
            
            $table->string('title2',100);
            $table->text('description2')->nullable();

            $table->string('imag_cs')->nullable();
            $table->string('title_cs',100)->nullable();
            $table->text('description_cs')->nullable();
            $table->string('telf_cs',100)->nullable();
            $table->string('telw_cs',100)->nullable();
            $table->string('email_cs',100)->nullable();

            $table->string('title3',100);
            $table->text('description3')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
