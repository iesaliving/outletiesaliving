<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsSyncTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs_sync', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->string('startDate');
            //$table->string('endDate');
            $table->dateTime('startDate');
            $table->dateTime('endDate');
            $table->json('mails');
            $table->integer('cant');
            $table->integer('origin');//1create 2update
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logs_sync');
    }
}
