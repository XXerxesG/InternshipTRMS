<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsoTimingChecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aso_timing_checks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('test_id');
            $table->integer('sample_id')->nullable();
            $table->string('doc_num')->nullable();
            $table->string('power_rating')->nullable();
            $table->string('test_purpose')->nullable();
            $table->string('rev_num')->nullable();
            $table->string('supplier')->nullable();
            $table->string('wire_size')->nullable();
            $table->string('pin_type')->nullable();
            $table->string('flex_type')->nullable();
            $table->string('bending_angle')->nullable();
            $table->string('weight')->nullable();
            $table->string('current')->nullable();
            $table->string('issue')->nullable();
            $table->string('progress_action')->nullable();
            $table->text('status')->nullable();
            //*change the following accordingly. note the same naming convention used here must be the same through out. you can also change the variable here too 
            $table->string('0_cycle_min')->nullable();
            $table->string('0_cycle_max')->nullable();
            $table->string('0_cycle_mean')->nullable();
            $table->string('0_cycle_horizontal')->nullable();
            $table->string('0_cycle_vertical')->nullable();
            $table->string('1000_cycle_min')->nullable();
            $table->string('1000_cycle_max')->nullable();
            $table->string('1000_cycle_mean')->nullable();
            $table->string('1000_cycle_horizontal')->nullable();
            $table->string('1000_cycle_vertical')->nullable();
            $table->string('result')->nullable();
            $table->text('remark')->nullable(); 
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
        //*changet the yellow colour part
         Schema::dropIfExists('aso_timing_checks');
    }
}

