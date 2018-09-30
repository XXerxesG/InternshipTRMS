<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVibrationTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //*edit the name of the table
        Schema::create('vibration_tests', function (Blueprint $table) {
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
            $table->string('type_of_vibration')->nullable();
            $table->string('F-Box')->nullable();
            $table->string('iron')->nullable();
            $table->string('result')->nullable();
            $table->string('remark')->nullable();
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
        //*changet the yellow colour part the name of the table
         Schema::dropIfExists('vibration_tests');
    }
}
