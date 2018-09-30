<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('description');
            $table->text('compliance')->nullable();
            $table->string('application')->nullable();
            $table->integer('est_duration')->nullable();
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
        Schema::dropIfExists('test_types');
    }
}
