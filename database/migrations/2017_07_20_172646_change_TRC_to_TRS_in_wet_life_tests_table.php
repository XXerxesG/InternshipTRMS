<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeTRCToTRSInWetLifeTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wet_life_tests', function(Blueprint $table){
            $table->renameColumn('TRC_0', 'TRS_0');
            $table->renameColumn('TRC_100', 'TRS_100');
            $table->renameColumn('TRC_200', 'TRS_200');
            $table->renameColumn('TRC_300', 'TRS_300');
            $table->renameColumn('TRC_600', 'TRS_600');
            $table->renameColumn('TRC_900', 'TRS_900');
            $table->renameColumn('TRC_1200', 'TRS_1200');
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
