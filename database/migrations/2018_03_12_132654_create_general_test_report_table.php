<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralTestReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('General_test_reports', function (Blueprint $table) {
            $table->integer('Id');
            $table->integer('Test_id');
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
        //
    }
}
