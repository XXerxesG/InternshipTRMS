<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlexingTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flexing_tests', function (Blueprint $table) {
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
            $table->string('8000')->nullable();
            $table->string('16000')->nullable();
            $table->string('24000')->nullable();
            $table->string('32000')->nullable();
            $table->string('40000')->nullable();
            $table->string('48000')->nullable();
            $table->string('56000')->nullable();
            $table->string('65000')->nullable();
            $table->string('station_num')->nullable();
            $table->string('EWBC')->nullable();
            $table->string('LONW1')->nullable();
            $table->string('LONW2')->nullable();
            $table->string('BM')->nullable();
            $table->string('fire')->nullable();
            $table->string('EOIW')->nullable();
            $table->string('EPM')->nullable();
            $table->string('LONW3')->nullable();
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
        Schema::dropIfExists('flexing_tests');
    }
}
