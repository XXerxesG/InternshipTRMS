<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWetLifeTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wet_life_tests', function (Blueprint $table) {
            // This table uses all text format due to row size restriction in MySQL
            $table->increments('id');
            $table->integer('test_id');
            $table->integer('sample_id')->nullable();
            $table->text('doc_num')->nullable();
            $table->text('power_rating')->nullable();
            $table->text('test_purpose')->nullable();
            $table->text('rev_num')->nullable();
            
            // Actual Hours Tested
            $table->text('AHT_0')->nullable();
            $table->text('AHT_100')->nullable();
            $table->text('AHT_200')->nullable();
            $table->text('AHT_300')->nullable();
            $table->text('AHT_600')->nullable();
            $table->text('AHT_900')->nullable();
            $table->text('AHT_1200')->nullable();
            
            // Date Of Checking (can be 'date' format, but use str for convenience)
            $table->text('DOC_0')->nullable();
            $table->text('DOC_100')->nullable();
            $table->text('DOC_200')->nullable();
            $table->text('DOC_300')->nullable();
            $table->text('DOC_600')->nullable();
            $table->text('DOC_900')->nullable();
            $table->text('DOC_1200')->nullable();
            
            // Temperature Recording Station
            $table->text('TRC_0')->nullable();
            $table->text('TRC_100')->nullable();
            $table->text('TRC_200')->nullable();
            $table->text('TRC_300')->nullable();
            $table->text('TRC_600')->nullable();
            $table->text('TRC_900')->nullable();
            $table->text('TRC_1200')->nullable();
            
            // Below is functional check, use f1_100 to represent fisrt functional check at 100hrs
            
            // f1:high voltage
            $table->text('f1_0')->nullable();
            $table->text('f1_100')->nullable();
            $table->text('f1_200')->nullable();
            $table->text('f1_300')->nullable();
            $table->text('f1_600')->nullable();
            $table->text('f1_900')->nullable();
            $table->text('f1_1200')->nullable();
            
            // f2:earth resistance continuity
            $table->text('f2_0')->nullable();
            $table->text('f2_100')->nullable();
            $table->text('f2_200')->nullable();
            $table->text('f2_300')->nullable();
            $table->text('f2_600')->nullable();
            $table->text('f2_900')->nullable();
            $table->text('f2_1200')->nullable();

            // f3:leakage current at rated voltage
            $table->text('f3_0')->nullable();
            $table->text('f3_100')->nullable();
            $table->text('f3_200')->nullable();
            $table->text('f3_300')->nullable();
            $table->text('f3_600')->nullable();
            $table->text('f3_900')->nullable();
            $table->text('f3_1200')->nullable();
            
            // f4: power up 
            // a: live-earth
            // b: neutral-earth
            $table->text('f4a_0')->nullable();
            $table->text('f4a_100')->nullable();
            $table->text('f4a_200')->nullable();
            $table->text('f4a_300')->nullable();
            $table->text('f4a_600')->nullable();
            $table->text('f4a_900')->nullable();
            $table->text('f4a_1200')->nullable();
            $table->text('f4b_0')->nullable();
            $table->text('f4b_100')->nullable();
            $table->text('f4b_200')->nullable();
            $table->text('f4b_300')->nullable();
            $table->text('f4b_600')->nullable();
            $table->text('f4b_900')->nullable();
            $table->text('f4b_1200')->nullable();

            // f5: power off
            // a: live-earth
            // b: neutral-earth
            $table->text('f5a_0')->nullable();
            $table->text('f5a_100')->nullable();
            $table->text('f5a_200')->nullable();
            $table->text('f5a_300')->nullable();
            $table->text('f5a_600')->nullable();
            $table->text('f5a_900')->nullable();
            $table->text('f5a_1200')->nullable();
            $table->text('f5b_0')->nullable();
            $table->text('f5b_100')->nullable();
            $table->text('f5b_200')->nullable();
            $table->text('f5b_300')->nullable();
            $table->text('f5b_600')->nullable();
            $table->text('f5b_900')->nullable();
            $table->text('f5b_1200')->nullable();

            // f6: power @230V : W +5%/-10%
            // a: (system)
            // b: (boiler)
            // c: (iron)
            $table->text('f6a_0')->nullable();
            $table->text('f6a_100')->nullable();
            $table->text('f6a_200')->nullable();
            $table->text('f6a_300')->nullable();
            $table->text('f6a_600')->nullable();
            $table->text('f6a_900')->nullable();
            $table->text('f6a_1200')->nullable();
            $table->text('f6b_0')->nullable();
            $table->text('f6b_100')->nullable();
            $table->text('f6b_200')->nullable();
            $table->text('f6b_300')->nullable();
            $table->text('f6b_600')->nullable();
            $table->text('f6b_900')->nullable();
            $table->text('f6b_1200')->nullable();
            $table->text('f6c_0')->nullable();
            $table->text('f6c_100')->nullable();
            $table->text('f6c_200')->nullable();
            $table->text('f6c_300')->nullable();
            $table->text('f6c_600')->nullable();
            $table->text('f6c_900')->nullable();
            $table->text('f6c_1200')->nullable();

            // f7: soleplage temperature at max position
            // a: overshoot
            // b: max
            // c: min
            // d: switch range
            $table->text('f7a_0')->nullable();
            $table->text('f7a_100')->nullable();
            $table->text('f7a_200')->nullable();
            $table->text('f7a_300')->nullable();
            $table->text('f7a_600')->nullable();
            $table->text('f7a_900')->nullable();
            $table->text('f7a_1200')->nullable();
            $table->text('f7b_0')->nullable();
            $table->text('f7b_100')->nullable();
            $table->text('f7b_200')->nullable();
            $table->text('f7b_300')->nullable();
            $table->text('f7b_600')->nullable();
            $table->text('f7b_900')->nullable();
            $table->text('f7b_1200')->nullable();
            $table->text('f7c_0')->nullable();
            $table->text('f7c_100')->nullable();
            $table->text('f7c_200')->nullable();
            $table->text('f7c_300')->nullable();
            $table->text('f7c_600')->nullable();
            $table->text('f7c_900')->nullable();
            $table->text('f7c_1200')->nullable();
            $table->text('f7d_0')->nullable();
            $table->text('f7d_100')->nullable();
            $table->text('f7d_200')->nullable();
            $table->text('f7d_300')->nullable();
            $table->text('f7d_600')->nullable();
            $table->text('f7d_900')->nullable();
            $table->text('f7d_1200')->nullable();

            // f8: steam rate
            // a: 1st measurement
            // b: 2nd measurement
            // c: 3rd measurement
            // d: average steam rate
            $table->text('f8a_0')->nullable();
            $table->text('f8a_100')->nullable();
            $table->text('f8a_200')->nullable();
            $table->text('f8a_300')->nullable();
            $table->text('f8a_600')->nullable();
            $table->text('f8a_900')->nullable();
            $table->text('f8a_1200')->nullable();
            $table->text('f8b_0')->nullable();
            $table->text('f8b_100')->nullable();
            $table->text('f8b_200')->nullable();
            $table->text('f8b_300')->nullable();
            $table->text('f8b_600')->nullable();
            $table->text('f8b_900')->nullable();
            $table->text('f8b_1200')->nullable();
            $table->text('f8c_0')->nullable();
            $table->text('f8c_100')->nullable();
            $table->text('f8c_200')->nullable();
            $table->text('f8c_300')->nullable();
            $table->text('f8c_600')->nullable();
            $table->text('f8c_900')->nullable();
            $table->text('f8c_1200')->nullable();
            $table->text('f8d_0')->nullable();
            $table->text('f8d_100')->nullable();
            $table->text('f8d_200')->nullable();
            $table->text('f8d_300')->nullable();
            $table->text('f8d_600')->nullable();
            $table->text('f8d_900')->nullable();
            $table->text('f8d_1200')->nullable();

            // f9: auto steaming check (using ironing board)
            // a: forward stroke
            // b: backward stroke
            // c: side stroke (left and right)
            // d: lift (upward and downward)
            // e: light (on/off) of auto steam
            $table->text('f9a_0')->nullable();
            $table->text('f9a_100')->nullable();
            $table->text('f9a_200')->nullable();
            $table->text('f9a_300')->nullable();
            $table->text('f9a_600')->nullable();
            $table->text('f9a_900')->nullable();
            $table->text('f9a_1200')->nullable();
            $table->text('f9b_0')->nullable();
            $table->text('f9b_100')->nullable();
            $table->text('f9b_200')->nullable();
            $table->text('f9b_300')->nullable();
            $table->text('f9b_600')->nullable();
            $table->text('f9b_900')->nullable();
            $table->text('f9b_1200')->nullable();
            $table->text('f9c_0')->nullable();
            $table->text('f9c_100')->nullable();
            $table->text('f9c_200')->nullable();
            $table->text('f9c_300')->nullable();
            $table->text('f9c_600')->nullable();
            $table->text('f9c_900')->nullable();
            $table->text('f9c_1200')->nullable();
            $table->text('f9d_0')->nullable();
            $table->text('f9d_100')->nullable();
            $table->text('f9d_200')->nullable();
            $table->text('f9d_300')->nullable();
            $table->text('f9d_600')->nullable();
            $table->text('f9d_900')->nullable();
            $table->text('f9d_1200')->nullable();
            $table->text('f9e_0')->nullable();
            $table->text('f9e_100')->nullable();
            $table->text('f9e_200')->nullable();
            $table->text('f9e_300')->nullable();
            $table->text('f9e_600')->nullable();
            $table->text('f9e_900')->nullable();
            $table->text('f9e_1200')->nullable();

            // Abnormal Test
            // f10: Time fuse take for soleplate to operate (min)
            $table->text('f10_0')->nullable();
            $table->text('f10_100')->nullable();
            $table->text('f10_200')->nullable();
            $table->text('f10_300')->nullable();
            $table->text('f10_600')->nullable();
            $table->text('f10_900')->nullable();
            $table->text('f10_1200')->nullable();

            // f11: Time taken for boiler fuse to operate (min)
            $table->text('f11_0')->nullable();
            $table->text('f11_100')->nullable();
            $table->text('f11_200')->nullable();
            $table->text('f11_300')->nullable();
            $table->text('f11_600')->nullable();
            $table->text('f11_900')->nullable();
            $table->text('f11_1200')->nullable();

            // f12: soleplate temp when fuse operated (°C)
            $table->text('f12_0')->nullable();
            $table->text('f12_100')->nullable();
            $table->text('f12_200')->nullable();
            $table->text('f12_300')->nullable();
            $table->text('f12_600')->nullable();
            $table->text('f12_900')->nullable();
            $table->text('f12_1200')->nullable();

            // f13: safety valve opening
            $table->text('f13_0')->nullable();
            $table->text('f13_100')->nullable();
            $table->text('f13_200')->nullable();
            $table->text('f13_300')->nullable();
            $table->text('f13_600')->nullable();
            $table->text('f13_900')->nullable();
            $table->text('f13_1200')->nullable();

            // f14: boiler temp when fuse operated
            $table->text('f14_0')->nullable();
            $table->text('f14_100')->nullable();
            $table->text('f14_200')->nullable();
            $table->text('f14_300')->nullable();
            $table->text('f14_600')->nullable();
            $table->text('f14_900')->nullable();
            $table->text('f14_1200')->nullable();

            // f15: safety valve (opening, stabilization, max pressure)(7 8-8 6)
            $table->text('f15_0')->nullable();
            $table->text('f15_100')->nullable();
            $table->text('f15_200')->nullable();
            $table->text('f15_300')->nullable();
            $table->text('f15_600')->nullable();
            $table->text('f15_900')->nullable();
            $table->text('f15_1200')->nullable();

            // Soleplate cavity number
            $table->text('f16_0')->nullable();
            $table->text('f16_100')->nullable();
            $table->text('f16_200')->nullable();
            $table->text('f16_300')->nullable();
            $table->text('f16_600')->nullable();
            $table->text('f16_900')->nullable();
            $table->text('f16_1200')->nullable();

            // remark"
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
        Schema::dropIfExists('wet_life_tests');
    }
}
