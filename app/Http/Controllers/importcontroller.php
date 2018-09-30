<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\test_duration;
use Maatwebsite\Excel\Facades\Excel;
use Session;
use DB;
use reader;
use Illuminate\Support\Facades\Input;
use Validator;



class importcontroller extends Controller
{
    public function index()
    {
      $test_durations = test_duration::all();
        
      return view('import', compact('test_durations'));
      
   	}
    
    public function index2()
    {
      $test_durations = test_duration::all();
        
      return view('/testdurationmasterview', compact('test_durations'));
      
    }
    
     public function importExcel(Request $request)
    {

        
        
        if($request->hasFile('import_file')){
           
            DB::table('test_durations')->delete();
            Excel::load($request->file('import_file')->getRealPath(), function ($reader) { 
                
                foreach ($reader->toArray() as $key => $row) {
                    $data['ids'] = $row['id'];
                    $data['test'] = $row['test'];
                    $data['status'] = $row['status'];
                    $data['version'] = $row['version'];
                    $data['testtarget'] = $row['testtarget'];
                    $data['unit'] = $row['unit'];
                    $data['sample_size'] = $row['sample_size'];
                    $data['no_of_working_shift'] = $row['no_of_working_shift'];
                    $data['no_of_hours_tested_per_shift'] = $row['no_of_hours_tested_per_shift'];
                    $data['no_of_test_hours_per_day'] = $row['no_of_test_hours_per_day'];
                    $data['no_days_to_complete_the_test'] = $row['no_days_to_complete_the_test'];
                    $data['preparation_sample_equipment'] = $row['preparation_sample_equipment'];
                    $data['no_of_interval_checks'] = $row['no_of_interval_checks'];
                    $data['total_time_taken_to_complete_interval_checks'] = $row['total_time_taken_to_complete_interval_checks'];
                    $data['reporting'] = $row['reporting'];
                    $data['headroom_for_mc_leave_public_holiday_equipment_down_time'] = $row['headroom_for_mc_leave_public_holiday_equipment_down_time'];
                    $data['headroom_for_design_issue'] = $row['headroom_for_design_issue'];
                    $data['no_days_to_complete_life_test_including_all_checks'] = $row['no_days_to_complete_life_test_including_all_checks'];
                    $data['test_add_on_1'] = $row['test_add_on_1'];
                    $data['test_add_on_2'] = $row['test_add_on_2'];
                    $data['no_days_to_complete_life_test'] = $row['no_days_to_complete_life_test'];
                    $data['no_work_days_per_week'] = $row['no_work_days_per_week'];
                    $data['total_duration_in_days_3_shifts'] = $row['total_duration_in_days_3_shifts'];
                    $data['comments'] = $row['comments'];

                    if(!empty($data)) {
                        
                        DB::table('test_durations')->insert($data);
                       session()->flash('successMsg', 'Your file successfully import in database!!!'); 
                    }
                }
            });
        }
        
       
        return redirect('/import');
        
    }

    public function importExcel2(Request $request)
    {

        
        
        if($request->hasFile('import_file')){
           
            DB::table('test_types')->delete();
            Excel::load($request->file('import_file')->getRealPath(), function ($reader) { 
                
                foreach ($reader->toArray() as $key => $row) {
                    $data['protocol_id'] = $row['protocol_id'];
                    $data['description'] = $row['description'];

                    if(!empty($data)) {
                        
                        DB::table('test_types')->insert($data);
                       session()->flash('successMsg', 'Your file successfully import in database!!!'); 
                    }
                }
            });
        }
        
       
        return redirect('/import');
        
    }
}  
   
