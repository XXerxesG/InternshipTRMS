<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBareapplicationirontabletestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Bareapplicationirontabletests', function (Blueprint $table) {

            $table->integer('id');
            $table->integer('test_id');
            $table->text('no')->nullable();
            $table->text('temprecordingstation')->nullable();
            $table->text('minc1')->nullable();
            $table->text('maxc1')->nullable();
            $table->text('Meant1')->nullable();
            $table->text('minc2')->nullable();
            $table->text('maxc2')->nullable();
            $table->text('Meant2')->nullable();
            $table->text('solepatetemperaturedrift')->nullable();
            $table->text('solepate')->nullable();
            $table->text('sidewardrightside)')->nullable();
            $table->text('cordentry')->nullable();
            $table->text('hv')->nullable();
            $table->text('tstat')->nullable();
            $table->text('spraysosknob')->nullable();
            $table->text('steamslider')->nullable();
            $table->text('streaming')->nullable();
            $table->text('majorcrack')->nullable();
            $table->text('result')->nullable();
            $table->text('remarks')->nullable();
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
