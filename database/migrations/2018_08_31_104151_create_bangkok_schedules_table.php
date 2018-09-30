<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBangkokSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bangkok_schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ticket_id')->nullable();
            $table->integer('test_type_id')->nullable();
            $table->text('week')->nullable();
            $table->integer('slots')->nullable();
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
        Schema::dropIfExists('bangkok_schedules');
    }
}
