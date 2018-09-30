<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use App\Ticket;
use App\Project;
use App\Test;
use Carbon\Carbon;
use App\TestType;
use App\Modelcode;
use App\Mail\NewTestTicket;
use Illuminate\Support\Facades\Input;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\lifetestschedule;
use App\user;

class TestController extends Controller
{
	public function show(Test $test)
	{
		// Test title  aka 'description'
		$title = DB::table('test_types')->where('id', $test->test_type_id)->first()->title;
		
		$title = strtolower($title);
		$title = preg_replace('/\s+/', '_', $title);

		
		// from test title, get the affected rows from DB
		$datas = DB::table($title."s")->where('test_id', $test->id)->orderBy('sample_id', 'asc')->get();

		// Get all files for a given test_id
		// From $directories
		$files = array();
		$directories = Storage::allDirectories($test->id);
		foreach($directories as $directory){
			$files[] = Storage::allFiles($directory);
		}

		// Read protocal csv file and pass to view
		// uncommented for testing wet-life which does not have csv
		// $name = preg_replace('/\|\s/', '', $test->testType->description);
		// $address = storage_path('app\\public\\csv\\'.$name.'.csv');
		// $file = fopen($address, 'r');
		// $csv = array();
		// while($line = fgetcsv($file)){
		// 	$csv[] = $line;
		// }

		// Return the view
		// @param: 
		//   title: Title of the test type, aka test_description
		//   datas: # of sample datas from its table
		//   test: Infomations for this test_id
		//   files: documents inside the storage folder
		//   csv: csv file in array form
		
		if(Gate::allows('admin')){
			return view('testType.'.$title.'_editable', compact('title', 'datas', 'test', 'files'));
		};

		return view('testType.'.$title, compact('title', 'datas', 'test', 'files'));

	}

	public function store(Request $request)
	{
		return redirect()->back();
	}

	public function update(Test $test)
	{
		if(request()->has('status')){
			// Update test status
			$test->status = request()->get('status');
			$test->save();
		}
		if(request()->has('test_eng')){
			// Update test_eng
			$test->test_eng = request()->get('test_eng');
			$test->save();

			// Append a line to change log
			$line = 'Test id:' . $test->id . "\n"; 
			$line .= request()->user()->name . ' has changed the status to "' . request()->get('status') . '" at ' . Carbon::now()->toDateTimeString() . "\n";
			\Storage::append($test->id.'\status_log.txt', $line);
		}

		if(request()->exists('approval')){
			$test->approved = request()->get('approval');
			if($test->status=='Pending approval' && $test->approved){
				$test->status = 'Pending samples arrival';
			}
			$test->save();

			
		}

		return redirect('/mastertable');
	}


	public function index()
	{
		$projects = Project::all();
		
		$tickets = Ticket::paginate(500);
		$tickets = Ticket::all()->sortByDesc('created_at');


		foreach ($tickets as $ticket){
			$time = Carbon::createFromFormat('Y-m-d H:i:s', $ticket->created_at);
			$ticket['time'] = $time->diffForHumans();
		}

		return view('tests.index', compact('tickets', 'projects'));
	}

	public function edittest($id)
	{
		$tests = test::find($id);
		$projects = Project::all();
		
		$testTypes = TestType::all()->sortByDesc('description');

		return view('tickets.edit', compact('tests','projects', 'testTypes'));
	}

	public function edittest1(request $request, $id)
	{
		$tests = test::find($id);
		$tests->test_type_id =$request->get('test_type_id');
		$tests->reason =$request->get('reason');
		$tests->size =$request->get('size');
       	$tests->sample_availability =$request->get('sample_availability');
       	$tests->sample_type =$request->get('sample_type');
       	$tests->protocal_deviation =$request->get('protocal_deviation');
       	$tests->remark =$request->get('remark');
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
          
          $mail->Subject = 'Email from Localhost by trms';
          
          $mail->Body    = '<h>Hi,</h><br><br><br>
                            <p1> Ticket of ID number ' .$test_id. ' have been edited by ' .$user.'</p1><br><br><br>
                            <p2>You will be able to log into your site at <a href="http://127.0.0.1:8000/ticketslist" style="color:blue">http://127.0.0.1:8000/ticketslist</a><br><br><br>
                            <p3> Thank you,</p3><br>
                            <p4> By TRMS</p4>';
          if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
        }

        return redirect('/ticketslist');
	}

	public function cancelrow(request $request, $id)
	{
		$tests = test::find($id);
		$tests->cancel=$request->get('cancel');
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
          
          $mail->Subject = 'Email from Localhost by trms';
          if($tests->cancel){
          $mail->Body    = '<h>Hi,</h><br><br><br>
                            <p1> Ticket of ID number ' .$test_id. ' have been cancelled by ' .$user.'</p1><br><br><br>
                            <p2>You will be able to log into your site at <a href="http://127.0.0.1:8000/ticketslist" style="color:blue">http://127.0.0.1:8000/ticketslist</a><br><br><br>
                            <p3> Thank you,</p3><br>
                            <p4> By TRMS</p4>';
          }else{
          $mail->Body    = '<h>Hi,</h><br><br><br>
                            <p1> Ticket of ID number ' .$test_id. ' have been uncancelled by ' .$user.'</p1><br><br><br>
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
		return redirect('/ticketslist'); 
	}

	public function archived(request $request, $id)
	{
		$tests = test::find($id);
		$tests->archive =$request->get('archive');
		$tests->save();

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
          $mail->Body    = $bodyContent;
          if(!$mail->send()) {
   			echo 'Message could not be sent.';
    		echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
    		echo 'Message has been sent';
				}

        return redirect('/tests');
	}

	public function unarchived(request $request, $id)
	{
		$tests = test::find($id);
		$tests->archive =$request->get('archive');
		$tests->save();

        return redirect('/archive');
	}

	public function addtest(request $request, $id)
	{
		$tickets = ticket::find($id);
		$projects = Project::all();
		
		$testTypes = TestType::all()->sortByDesc('description');

		return view('tickets.addtest', compact('tickets','projects', 'testTypes'));
		
	}
	public function addtests(request $request, $id)
	{
	// # of tests from the current ticket
		$count = count(request()->get('tests'));

		// Get current time to check is there any ticket submitted today
		$now = substr(Carbon::now()->toTimeString(), 0, 10);
		$ticketsToday = DB::table('tickets')
				->whereDate('created_at', $now);

		
		// Otherwise, increment the ticket id
		$ticket_id = Input::get ('$id');
		$a = Input::get ( 'number' );
		
		// For every every ticket, save all test
		$tests = request()->get('tests');
		for($i=1; $i<=$count; $i++){
			$b = $a + $i;
			$test = new Test;
			$test->id = $id.$b;
			$test->ticket_id =$id;
			$test->test_type_id = TestType::where('description', $tests[$i]['description'])->first()['id'];
			$test->modelcode_id = Modelcode::where('code', $tests[$i]['model'])->first()['id'];
			$test->reason = $tests[$i]['reason'];
			$test->sample_availability = $tests[$i]['sample_availability'];
			$test->sample_type = $tests[$i]['sample_type'];
			$test->project_stage = $tests[$i]['project_stage'];
			$test->protocal_deviation = $tests[$i]['protocal_deviation'];
			$test->remark = $tests[$i]['remark'];
			$test->size = $tests[$i]['sample_size'];

			$test->save();
	}
		 return redirect('/ticketslist');
	
}

public function report(request $request, $id)
	{
		$test = test::find($id);
		$test->report =$request->get('report');
		$test->save();
		
		$test->report = true;
		$test->save();

		// After a ticket is 'processed', allocate resources for approved tests.
		// Save every sample in 'testType/xxx' table
		
		
			// Find the description of the test
			$title = TestType::find($test->test_type_id)->title;
			$title = strtolower($title);
			$title = preg_replace('/\s+/', '_', $title);
			
			// Reserve test in their respective table, will only be so after ticket 'approval' and 'confirmed'
			for($j=1; $j<=(int)$test->size; $j++){
				DB::table($title.'s')->insert(
					[
						'sample_id'=>$j,
						'test_id'=>$test->id,
						'created_at'=>Carbon::now(),
						'updated_at'=>Carbon::now()
					]
				);
				Storage::makeDirectory($test->id . '/' . $j);
			}			
		
		return redirect('/tests');
		
	}

	public function lifetestschedule(request $request)
	{	
		$sample_size = 10;
	 	$lifetestschedules = lifetestschedule::all();
	 	$testduration= 10;
	 	$week = 1;
	 	for($i=$week; $i<$week+$testduration; $i++){
	 		$wk = 0+$i;
	 		$lifetestschedules = lifetestschedule::find($wk);
	 	if( $sample_size < $lifetestschedules->balance)
	 		echo $lifetestschedules->wk;
	 // 		
	 // }
	 	// foreach ( $lifetestschedules as $lifetestschedule)
	 	// 	if( $sample_size > $lifetestschedule->balance)
	 	// 		echo $i = max(1,5,6)->first();

		
	}
}
	 	
}
