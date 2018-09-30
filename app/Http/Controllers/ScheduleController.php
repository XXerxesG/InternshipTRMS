<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\Test;
use App\project;
use App\TestType;
use Carbon\Carbon;
use App\BangkokSchedule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class ScheduleController extends Controller
{
    // Not in USE WITH MASTER TABLE ONLY USES WITH SCHEDULING VIEW

    //Show the scheduling view
     public function show(){
         $tests=Test::where('approved','1')->get();
         $testtype = testtype::all();
         $ticket = ticket::all();
        return view('Scheduling.schedule',compact('tests','testtype','ticket'));
     }
     //Here is where the scheduling view sends the data to find the est_end_date
     public function update(request $request, $id){
        $tests=Test::where('approved','1')->get();
        $testtype = testtype::all();// get all the data from the testtype column
        $ticket = ticket::all();// get all the data from the ticket column

        
        $t=Test::find($id); //find the specific test
        //Just to to double check if the scheduling check box shouldnt get ticked if the user has not input the estimated start date.
        if($t->est_start_date=== NULL){
            $t->scheduling='0';//Make the value of scheduling 0 since we dont want the scheduling box to be checked.
            $t->save();
        return redirect('mastertable');
        }
        else{
        //to get the estimated end date
        $t->days=$request->get('days');//save the number of the days the test needs to run for the specific id
        $t->scheduling='1';//Update the system notifying that scheduling has been done
        $day=$request->get('days');//take the number of days in order to update the es_end_date
        $s=$t->est_start_date;//get the est_start_date
        $start=Carbon::parse($s);//convert_est_start_date to Carbon in order for better manupilation
        $t->start_week=$start->weekOfYear;//get the week number of the est_start_date
        $est=$start->addWeekdays($day);//skips the weekend and gets the est_end_date
        $t->est_end_date=$est;//save the est_end_date
        $t->end_week=$start->weekOfYear;//get the week number of the est_end_date
        $t->save();
        return redirect('mastertable');
        }
      
     }
     public function updatemachine(request $request, $id){
        $tests=Test::where('approved','1')->get();//take all the tests which are accepted.
        $testtype = testtype::all();// get all the data from the testtype column
        $ticket = ticket::all();// get all the data from the ticket column

        $t=Test::find($id);//find the test with the specific id
        return view('Scheduling.selectmachine',compact('t'));
    }
    public function addmachine(request $request,$id){
        $tests=Test::where('approved','1')->get();
        $testtype = testtype::all();// get all the data from the testtype column
        $ticket = ticket::all();// get all the data from the ticket column

        $t=Test::find($id);// find the machine with the given id
        $t->machine=$request->get('status');//save the status
        $t->save();//save the test
        return redirect('mastertable');
    }
    //Not in use. Just kept in case want to see some specific code

     //To show the new schedule form
   /* 
        public function newschedule(){
            return view('Scheduling.addschedule');
        }
    //create the new yearly schedule
        public function updateschedule( request $request){
             $machine=$request->get('machines');
             $year=$request->get('year');
             $code=(string)$year;
            //dd($code); doing a data dump of the code
            // dd($machine,$year); data dump of the machine and year value.
      
            return redirect()->back();
            // return redirect('/home');
    } */
}
