<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateABoxDropTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('A_box_drop_tests', function (Blueprint $table) {
            $table->integer('Id');
            $table->integer('Test_id');
            $table->text('doc_num')->nullable();
            $table->text('power_rating')->nullable();
            $table->text('test_purpose')->nullable();
            $table->text('rev_num')->nullable();
            $table->text('supplier')->nullable();
            $table->text('wire_size')->nullable();
            $table->text('pin_type')->nullable();
            $table->text('flex_typev')->nullable();
            $table->text('bending_angle')->nullable();
            $table->text('weight')->nullable();
            $table->text('current')->nullable();

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
