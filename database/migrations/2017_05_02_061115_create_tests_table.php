<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ticket_id');
            $table->integer('test_type_id');
            $table->integer('modelcode_id');
            $table->string('reason')->nullable();
            $table->integer('size');
            $table->date('sample_availability');
            $table->string('sample_type')->nullable();
            $table->text('protocal_deviation');
            $table->text('remark')->nullable();
            $table->string('status')->default('Pending approval');
            $table->boolean('approved')->nullable();
            $table->date('est_start_date')->nullable();
            $table->date('actual_start_date')->nullable();
            $table->date('est_end_date')->nullable();
            $table->date('actual_end_date')->nullable();
            $table->text('row1')->nullable();
            $table->text('row2')->nullable();
            $table->text('row3')->nullable();
            $table->text('row4')->nullable();
            $table->text('row5')->nullable();
            $table->text('row6')->nullable();
            $table->text('row7')->nullable();
            $table->text('row8')->nullable();
            $table->text('row9')->nullable();
            $table->text('row10')->nullable();
            $table->text('row11')->nullable();
            $table->text('row12')->nullable();
            $table->text('row13')->nullable();
            $table->text('row14')->nullable();
            $table->text('row15')->nullable();
            $table->text('row16')->nullable();
            $table->text('row17')->nullable();
            $table->text('row18')->nullable();
            $table->text('row19')->nullable();
            $table->text('row20')->nullable();
            $table->text('row21')->nullable();
            $table->text('row22')->nullable();
            $table->text('row23')->nullable();
            $table->text('row24')->nullable();
            $table->text('row25')->nullable();
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
        Schema::dropIfExists('tests');
    }
}
