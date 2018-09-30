<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDropTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drop_tests', function (Blueprint $table) {
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
            $table->string('Temp_Recording_Station')->nullable();
            $table->string('before_min')->nullable();
            $table->string('before_max')->nullable();
            $table->string('after_min')->nullable();
            $table->string('after_max')->nullable();
            $table->string('HV_before')->nullable();
            $table->string('HV_after')->nullable();
            $table->string('leakage_current_before')->nullable();
            $table->string('leakage_current_after')->nullable();
            $table->string('1stdrop')->nullable();
            $table->string('2nddrop')->nullable();
            $table->string('3rddrop')->nullable();
            $table->string('Tstat')->nullable();
            $table->string('Spray')->nullable();
            $table->string('Steam_Slider')->nullable();
            $table->string('Steaming')->nullable();
            $table->text('remark')->nullable();
            $table->text('status')->nullable();
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
         Schema::dropIfExists('drop_tests');
    }
}
