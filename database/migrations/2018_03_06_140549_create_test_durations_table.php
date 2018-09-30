<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestDurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_durations', function (Blueprint $table) {
            $table->integer('Id');
            $table->integer('Test');
            $table->integer('Status')->nullable();
            $table->string('Version')->nullable();
            $table->string('Total_duration_in_weeks_2_shifts')->nullable();
            $table->string('Total_duration_in_weeks_3_shifts')->nullable();
            $table->string('Total_duration_in_days_3_shifts')->nullable();
            $table->string('Test_target')->nullable();
            $table->string('Unit')->nullable();
            $table->string('Total_duration_in_days_2_shifts')->nullable();
            $table->string('Total_duration_in_days_3_shifts_rounded')->nullable();
            $table->string('Sample_size')->nullable();
            $table->string('Actual_test_duration_2_shifts')->nullable();
            $table->string('Actual_test_duration_3/day_shifts')->nullable();
            $table->string('Preparation_-_sample+equipment')->nullable();
            $table->string('No_of_interval_checks')->nullable();
            $table->string('Reporting')->nullable();
            $table->string('Headroom_2_shifts')->nullable();
            $table->string('Headroom_3_shifts')->nullable();
            $table->string('Headroom_for_design_issue')->nullable();
            $table->string('comment')->nullable();
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
        Schema::dropIfExists('test_durations');
    }

}