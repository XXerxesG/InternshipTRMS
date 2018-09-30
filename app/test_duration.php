<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test_duration extends Model
{
	public $table = 'Test_durations';

    public $fillable = ['Id', 'Test', 'Status', 'Version', 'Total_duration_in_weeks_2_shifts', 'Total_duration_in_weeks_3_shifts', 'Total_duration_in_days_3_shifts', 'Test_target', 'Unit', 'Total_duration_in_days_2_shifts', 'Total_duration_in_days_3_shifts_rounded', 'Sample_size', 'Actual_test_duration_2_shifts', 'Actual_test_duration_3_per_day_shifts', 'Preparation_sample_equipment', 'No_of_interval_checks', 'Interval_check_in_days', 'Reporting', 'Headroom_2_shifts', 'Headroom_3_shifts', 'Headroom_for_design_issue', 'comment'];
}
