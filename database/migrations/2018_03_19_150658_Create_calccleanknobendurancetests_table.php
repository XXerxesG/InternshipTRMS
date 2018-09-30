<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalccleanknobendurancetestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calccleanknobendurancetests', function (Blueprint $table) {
            //b is before, a is after
            $table->integer('id');
            $table->integer('test_id');
            $table->text('no')->nullable();
            $table->text('force1b')->nullable();
            $table->text('force2b')->nullable();
            $table->text('force3b')->nullable();
            $table->text('force4b')->nullable();
            $table->text('force5b')->nullable();
            $table->text('avgforceb')->nullable();
            $table->text('sliderknobsluggishb')->nullable();
            $table->text('sliderknobjammedb')->nullable();
            $table->text('sliderknobleakb')->nullable();
            $table->text('force1a')->nullable();
            $table->text('force2a')->nullable();
            $table->text('force3a')->nullable();
            $table->text('force4a')->nullable();
            $table->text('force5a')->nullable();
            $table->text('avgforcea')->nullable();
            $table->text('sliderknobsluggisha')->nullable();
            $table->text('sliderknobjammeda')->nullable();
            $table->text('sliderknobleaka')->nullable();
            $table->text('result')->nullable();
         
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
