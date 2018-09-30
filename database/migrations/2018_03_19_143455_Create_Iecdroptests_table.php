<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIecdroptestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Iecdroptests', function (Blueprint $table) {

            $table->integer('id');
            $table->integer('test_id');
            $table->text('no')->nullable();
            $table->text('temprecordingstation')->nullable();
            $table->text('minc1')->nullable();
            $table->text('maxc1')->nullable();
            $table->text('minc2')->nullable();
            $table->text('maxc2')->nullable();
            $table->text('hvbefore')->nullable();
            $table->text('hvafter')->nullable();
            $table->text('leakagecurrentbefore')->nullable();
            $table->text('leakagecurrentafter')->nullable();
            $table->text('firstdropposition')->nullable();
            $table->text('seconddropposition')->nullable();
            $table->text('thirddropposition')->nullable();
            $table->text('tstat')->nullable();
            $table->text('spraysosknob')->nullable();
            $table->text('steamslider')->nullable();
            $table->text('streaming')->nullable();
            $table->text('results')->nullable();
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
