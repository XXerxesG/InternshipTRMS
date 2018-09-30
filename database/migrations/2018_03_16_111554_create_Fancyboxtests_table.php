<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFancyboxtestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Fancyboxtests', function (Blueprint $table) {

            $table->integer('Id');
            $table->integer('Test_id');
            $table->text('no')->nullable();
            $table->text('firstdrop')->nullable();
            $table->text('seconddrop')->nullable();
            $table->text('thirddrop')->nullable();
            $table->text('fourthdrop')->nullable();
            $table->text('LE')->nullable();
            $table->text('NE')->nullable();
            $table->text('HIV')->nullable();
            $table->text('Safetyvalve')->nullable();
            $table->text('evalve')->nullable();
            $table->text('wiring')->nullable();
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
        //
    }
}
