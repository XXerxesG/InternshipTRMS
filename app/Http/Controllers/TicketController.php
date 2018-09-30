<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Ticket;
use App\Test;
use App\project;
use App\TestType;
use App\Modelcode;
use Carbon\Carbon;
use App\Mail\NewTestTicket;
use Illuminate\Support\Facades\Input;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class TicketController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth', ['only' => 'create']);
	}

	// Create view for ticket
	public function create()
	{
		$projects = Project::all();
		$testTypes = TestType::all();
		// $testTypes = TestType::all();
		return view('tickets.create', compact('projects', 'testTypes'));
	}

	// Index page for ticket
	public function index()
	{
		$tickets = Ticket::latest()->get();
		$tests = test::all();
		return view('tickets.index', compact('tickets' , 'tests'));
	}

	// Get all modelcodes under each project, and pass back to 'ticket.create' view
	public function getmodelcode()
	{
		$project_name = request()->get('project_name');
		$codes = Project::where('project_name', $project_name)->first()->modelcodes->pluck('code');
		return $codes;
	}

	// See all tickets submitted by user.
	// The view will be available to edit 'approval' status and 'confirm'.
	public function show(Ticket $ticket)
	{
		$tests = Test::all();
		return view('tickets.show', compact('ticket'));
	}

	// Save all ticket information based on user submission
	public function store()
	{
		// # of tests from the current ticket
		$count = count(request()->get('tests'));

		// Get current time to check is there any ticket submitted today
		$now = substr(Carbon::now()->toDateTimeString(), 0, 10);
		$ticketsToday = DB::table('tickets')
				->whereDate('created_at', $now);

		// If there is no ticket submitted today, start with a newone
		// Otherwise, increment the ticket id
		if($ticketsToday->get()->isNotEmpty()){
			$ticket_id = $ticketsToday->latest()->first()->id + 1;
		}else{
			$ticket_id = preg_replace("(-)", "", $now) . "01";
			$ticket_id = substr($ticket_id, 2, 10);
		}

		// Save an individual ticket first.
		$ticket = new Ticket;
		$ticket->id = $ticket_id;
		$ticket->user_id = Auth::id();
		$ticket->project_id = Project::where('project_name', request()->project_name)->first()->id;
		// $ticket->test_id = test::where('size', request()->size)->first()['id'];
		//$ticket->project_stage = request()->get('project_stage');
		//$ticket->charging_code = request()->get('charging_code');
		$ticket->save();

		// For every every ticket, save all test
		$tests = request()->get('tests');
		for($i=1; $i<=$count; $i++){
			$test = new Test;
			$test->ticket_id = $ticket_id;
			$test->id = $ticket_id."$i";

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

		  $email = Input::get ( 'email' );
		  $ticket->id= $ticket_id;
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

          $mail->setFrom('No-reply@trms.com', 'admin');	// $mail->addReplyTo('any@example.com', 'user');
          $mail->addAddress($email);  					// Add a recipient
          $mail->addCC('admin');
          $mail->addBCC('');
          $mail->isHTML(true);  						// Set email format to HTML
          $bodyContent = view('emails.ticketrequest');
          $mail->Subject = 'Email from Localhost by trms';
          $mail->Body    = '<h>Hi,</h><br><br><br>
							<p1> New ticket of ID number ' .$ticket_id. ' have been requested by ' .$user.'</p1><br><br><br>
							<p2>You will be able to log into your site at <a href="http://127.0.0.1:8000/ticketslist" style="color:blue">http://127.0.0.1:8000/ticketslist</a><br><br><br>
							<p3> Thank you,</p3><br>
							<p4> By TRMS</p4>';
          if(!$mail->send()) {
   			echo 'Message could not be sent.';
    		echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
    		echo 'Message has been sent';
				}
		
		// Send email to Doris alerting new ticket
		// Mail::to("doris@philips.com")->send(new NewTestTicket($ticket));

		return redirect('/ticketslist');

	}

	// Changed the ticket status to 'processed' after Doris's viewing and click 'confirm'.
	public function update(Test $test)
	{
		$ticket->processed = true;
		$ticket->save();

		// After a ticket is 'processed', allocate resources for approved tests.
		// Save every sample in 'testType/xxx' table
		
		$tests = $ticket->tests;
		$count = count($tests);

		for($i=0; $i<$count; $i++){
			// Find the description of the test
			$title = TestType::find($tests[$i]->test_type_id)->title;
			$title = strtolower($title);
			$title = preg_replace('/\s+/', '_', $title);
			
			// Reserve test in their respective table, will only be so after ticket 'approval' and 'confirmed'
			for($j=1; $j<=(int)$tests[$i]->size; $j++){
				DB::table($title.'s')->insert(
					[
						'sample_id'=>$j,
						'test_id'=>$tests[$i]->id,
						'created_at'=>Carbon::now(),
						'updated_at'=>Carbon::now()
					]
				);
				Storage::makeDirectory($tests[$i]->id . '/' . $j);
			}			
		}

		return back();
	}

	// public function updatestatues(request $request)
 //   	{
 //   	$sample= $request -> input('sample');
 //   	$acknowledge=$request-> input('acknowledge');
 //   	$arrived=$request-> input('arrived');
   	

 //   	$data = array('sample'=>$sample,"acknowledge"=>$acknowledge, 'arrived'=>$arrived);
 //   	DB::table('tickets')->update($data);
      
 //      return redirect()->back();
 //   }
 //   	public function update2(Request $request)
	// {
	// 	$title = $request->title;
	// 	DB::table($title."s")
	// 		->where('test_id', $request->test_id)
	// 		->update([
	// 			"status" => $request->status,

	// 		]);
		
	// 	return redirect()->back();
	// }

	public function delete(request $request, $id)
	{
		$tickets = ticket::find($id);
		$tickets->delete();

        return redirect('/ticketslist');
	}

	public function search()
	{

    $q = Input::get ( 'q' );
    $user = ticket::whereHas('project', function($query) use($q) {
    $query->where('project_name', 'like', '%'.$q.'%')->orwhere('product_name', 'like', '%'.$q.'%');
	})->orWhere('id','LIKE','%'.$q.'%')->get();

    if (count ( $user ) > 0)
        return view ( 'tickets.index')->withDetails ( $user->sortByDesc('created_at') );
    else
        return view ( 'tickets.index')->withMessage ( 'No Details found. Try to search again !' );
	}

	public function searchdate()
	{

    $a = Input::get ( 'a' );
    $b = Input::get ( 'b');
    $user1 = ticket::wherebetween( 'created_at', array($a,$b))->get ();
   

    if (count ( $user1 ) > 0)
        return view ( 'tickets.index')->withDetails ( $user1 );
    else
        return view ( 'tickets.index')->withMessage ( 'No Details found. Try to search again !' );
	}
}
