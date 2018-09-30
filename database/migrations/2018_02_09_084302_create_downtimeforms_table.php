<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDowntimeformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('downtimeforms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('machinesname');
            $table->date('fromdate');
            $table->date('todate');
            $table->text('downreason')->nullable();
            $table->text('downremark')->nullable();
           
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
        Schema::dropIfExists('downtimeforms');
    }
}
