<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\test;
use App\User;
use App\ticket;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use app\downtimeform;
use app\listing;
use Carbon\Carbon;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Mail;
use Illuminate\Support\Facades\Input;

class updatedbcontroller extends Controller
{
    public function update2(request $request, $id)

        {
          session()->flash('successMsg','Updated Succesfully!');
        	$tests = test::find($id);
        	
        	$tests->equipment =$request->get('equipment');//Update the equipment status
          $tests->arrived =$request->get('arrived');//Update whether the sample has arrived
          $tests->scheduling =$request->get('scheduling');//Update whether the scheduling has been done
          $tests->testprogress =$request->get('testprogress');

          $tests->days=$request->get('days');//save the number of the days the test needs to run for the specific id
          $tests->est_start_date =$request->get('est_start_date');// Store the estimated start date.
        	$tests->actual_start_date =$request->get('actual_start_date');// Store the actual start date.
        	$tests->est_end_date =$request->get('est_end_date');// Store the estimated end date.
          $tests->actual_end_date =$request->get('actual_end_date');// Store the actual end date.

          $tests->equipment_start_date =$request->get('equipment_start_date');//Store the equipment(prepairing) start date
          $tests->equipment_end_date=$request->get('equipment_end_date');// Store the equipment(prepairing) end date.

          $tests->sample_start_date =$request->get('sample_start_date');// Store the sample (prepairing) start date
          $tests->sample_end_date=$request->get('sample_end_date');//Store the sample (prepairing) end date

          $tests->pausedate =$request->get('pausedate');//store the pause date
          $tests->canceldate =$request->get('canceldate');//store the test cancel date

          $tests->interval_start_date=$request->get('interval_start_date');//Store the test interval start date
          $tests->interval_end_date =$request->get('interval_end_date');//Store the test intereval end date

          $tests->sample_repair_start_date =$request->get('sample_repair_start_date');// Store the sample (repair) start date
          $tests->sample_repair_end_date =$request->get('sample_repair_end_date');//Store the sample (repair) end date

          $tests->pausereason =$request->get('pausereason');//to store the reason why the test was paused
          $tests->done =$request->get('done');

          //to check if the scheduling check box needs to be checked or not.
          if($tests->est_start_date=== NULL || $tests->days==NULL){//If either est_scheduling_date or the days to run is null then scheduling is not done
            $tests->scheduling='0';// if the estimated start date is null it wont be checked and scheduling's value will remain 0.
            $tests->save();// Save your changes
        // return redirect('mastertable');
        }
        //if the estimated start date does have a value then perform the calculation to get the estimated end date.
        else{
          
          $tests->scheduling='1';//Update the system notifying that scheduling has been done
          $day=$request->get('days');//take the number of days in order to update the es_end_date
          $s=$tests->est_start_date;//get the est_start_date
          $start=Carbon::parse($s);//convert_est_start_date to Carbon in order for better manupilation
          $tests->start_week=$start->weekOfYear;//get the week number of the est_start_date
          $est=$start->addWeekdays($day);//skips the weekend and gets the est_end_date
          $tests->est_end_date=$est;//save the est_end_date
          $tests->end_week=$start->weekOfYear;//get the week number of the est_end_date
          

        	$tests->save();// Save your changes
        } //Change the email and password and other settings for email in order to get notifications  when you submit a ticket
          $progress = Input::get ( 'progress' );
          $test_id = Input::get ( 'test_id' );
          $user = Input::get ( 'user' );
          $mail = new PHPMailer;
          $mail->isSMTP();                            // Set mailer to use SMTP
          $mail->Host = 'smtp.gmail.com';            // Specify main and backup SMTP servers
          $mail->SMTPAuth = true;                     // Enable SMTP authentication
          $mail->Username = 'zhonghsun93@gmail.com';         // SMTP username
          $mail->Password = 'yeozhonghsun1993';         // SMTP password
          $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
          $mail->Port = 587;                          // TCP port to connect to
          $mail->Host = 'tls://smtp.gmail.com:587';
          $mail->SMTPOptions = array(
          'ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
          )
          );

          $mail->setFrom('No-reply@trms.com', 'admin');
          // $mail->addReplyTo('any@example.com', 'user');
          $mail->addAddress('zhonghsun93@gmail.com');   // Add a recipient
          $mail->addCC('cc@example.com');
          $mail->addBCC('bcc@example.com');
          $mail->isHTML(true);  // Set email format to HTML
          
          $mail->Subject = 'Email from Localhost by trms';
        
          $mail->Body    = '<h>Hi,</h><br><br><br>
                            <p1> Your test of ID number ' .$test_id. ' have been processed to ' .$progress. ' by ' .$user.'</p1><br><br><br>
                            <p2>You will be able to log into your site at <a href="http://127.0.0.1:8000/tests" style="color:blue">http://127.0.0.1:8000/tests</a><br><br><br>
                            <p3> Thank you,</p3><br>
                            <p4> By TRMS</p4>';
          
          if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
        }
        	return redirect('/mastertable');

        }
      
    public function update3(request $request, $id)

        {

          session()->flash('successMsg','Updated Succesfully!');
          $tests = test::find($id);
          $tests->accept =$request->get('accept');
          $tests->rejectremark =$request->get('rejectremark');
          $tests->approved =$request->get('approved');
          $tests->project_id=$request->get('project_id');
          $tests->updated_at=Carbon::now();
          $tests->save();
          
          
          
          $test_id = Input::get ( 'test_id' );
          $user = Input::get ( 'user' );
          $mail = new PHPMailer;
          $mail->isSMTP();                            // Set mailer to use SMTP
          $mail->Host = 'smtp.gmail.com';            // Specify main and backup SMTP servers
          $mail->SMTPAuth = true;                     // Enable SMTP authentication
          $mail->Username = 'zhonghsun93@gmail.com';         // SMTP username
          $mail->Password = 'yeozhonghsun1993';         // SMTP password
          $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
          $mail->Port = 587;                          // TCP port to connect to
          $mail->Host = 'tls://smtp.gmail.com:587';
          $mail->SMTPOptions = array(
          'ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
          )
          );

          $mail->setFrom('No-reply@trms.com', 'admin');
          // $mail->addReplyTo('any@example.com', 'user');
          $mail->addAddress('zhonghsun93@gmail.com');   // Add a recipient
          $mail->addCC('cc@example.com');
          $mail->addBCC('bcc@example.com');
          $mail->isHTML(true);  // Set email format to HTML
          $bodyContent = view('emails.welcome');
          $mail->Subject = 'Email from Localhost by trms';
          if($accept = 1){
          $mail->Body    = '<h>Hi,</h><br><br><br>
                            <p1> Your ticket of ID number ' .$test_id. ' have been accepted by ' .$user.'</p1><br><br><br>
                            <p2>You will be able to log into your site at <a href="http://127.0.0.1:8000/ticketslist" style="color:blue">http://127.0.0.1:8000/ticketslist</a><br><br><br>
                            <p3> Thank you,</p3><br>
                            <p4> By TRMS</p4>';
          }else{
          $mail->Body    = '<h>Hi,</h><br><br><br>
                            <p1> Your ticket of ID number ' .$test_id. ' have been rejected by ' .$user.'</p1><br><br><br>
                            <p2>You will be able to log into your site at <a href="http://127.0.0.1:8000/ticketslist" style="color:blue">http://127.0.0.1:8000/ticketslist</a><br><br><br>
                            <p3> Thank you,</p3><br>
                            <p4> By TRMS</p4>';

          }
          if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
return redirect('ticketslist');
           }
}
