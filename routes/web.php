<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'GeneralController@index'); 

// Testing route for debugging template
// Route::get('/test', function(){
// 	return view('testType\wet_life_test_editable');
// });

Auth::routes();

route:: get('/home', 'generalcontroller@index');

Route::get('/admin', 'GeneralController@admin');
Route::post('/admin/{user}', 'GeneralController@change_type');

Route::resource('/projects', 'ProjectController');
Route::resource('/modelcodes', 'ModelcodeController');
Route::post('/projectsmanager','projectmanagersController@index');
Route::post('/qualityprojectleader','qualityprojectleadercontroller@index');
Route::patch("/project/{id}/edit", 'Projectcontroller@update10');

Route::get("/project/{id}/editprojectrow", 'Projectcontroller@update11');
Route::patch("/project/{id}/editprojectrow2", 'Projectcontroller@update12');

Route::get("/project/{id}/delete", 'Projectcontroller@delete');

Route::get("/project/editmodelcode", 'Projectcontroller@update13');
Route::patch("/project/{id}/editmodelcode2", 'Projectcontroller@update14');

Route::resource('/tickets', 'TicketController');
Route::post('/modelByProjectName', 'TicketController@getmodelcode');
Route::any("/tickets/{id}/edit", 'updatedbcontroller@update3');

Route::get("/tickets/{id}/deleteticketrow", 'TicketController@delete');


Route::resource('/tests', 'TestController');
Route::post('/tests/{test}/{num}', 'FileController@store');
Route::post('/tests/{test}/comments', 'CommentController@store');
Route::get('tests/{id}/editstatus', 'GeneralController@changestatus');
Route::get('tests/{id}/edittesteng', 'GeneralController@changestatus1');
Route::any('tests/archived/{id}','TestController@archived');
Route::any('tests/unarchived/{id}', 'TestController@unarchived');

Route::get('/tests/{id}/report','TestController@store');

Route::get('/tests/{id}/edittestrow', 'TestController@edittest');
Route::any('/tests/{id}/edittestrow1', 'TestController@edittest1');
Route::any('/tests/{id}/cancelrow','TestController@cancelrow');
Route::get('/addtest/{id}', 'TestController@addtest');
Route::post('/ticketsaddtest/{id}','TestController@addtests');
Route::any('/testsreport/{id}', 'TestController@report');

//copy and paste 38 to 40 and change the naming and the link direction
Route::patch('/testtype/flexings', 'TestType\FlexingTestController@update1');
Route::patch('/testtype/flexing', 'TestType\FlexingTestController@update2');
Route::patch('/testtype/flexingss', 'TestType\FlexingTestController@update3');
Route::patch('/testtype/wetlifes', 'TestType\WetLifeTestController@update1');
Route::patch('/testtype/wetlife', 'TestType\WetLifeTestController@update2');
Route::patch('/testtype/wetlifesss', 'TestType\WetLifeTestController@update3');
Route::patch('/testtype/drops', 'TestType\DropTestController@update1');
Route::patch('/testtype/drop', 'TestType\DropTestController@update2');
Route::patch('/testtype/dropss', 'TestType\DropTestController@update3');
Route::patch('/testtype/asos', 'TestType\AsoTimingChecksController@update1');
Route::patch('/testtype/aso', 'TestType\AsoTimingChecksController@update2');
Route::patch('/testtype/asoss', 'TestType\AsoTimingChecksController@update3');
Route::patch('/testtype/vibrations', 'TestType\VibrationTestController@update1');
Route::patch('/testtype/vibration', 'TestType\VibrationTestController@update2');
Route::patch('/testtype/vibrationss', 'TestType\VibrationTestController@update3');

Route::any('/generalreport/{id}', 'TestType\AsoTimingChecksController@update4' );
//all the test with function

Route::get('/operation', 'GeneralController@operation');
Route::get('/manpower', 'GeneralController@manpower');
Route::get('/log', 'GeneralController@log');
Route::get('/teamsetuppicture', 'GeneralController@teamsetuppicture');


Route::get('/project/{id}/edit', 'ProjectController@edit');
Route::put('/project/{id}', 'ProjectController@update');
Route::patch('/project', 'ProjectController@update');



Route::get("/newcreate","CreateNewController@createNew");
Route::post("/newcreate","CreateNewController@createNewPost");

Route::resource("/auth/password/reset", "Auth\ResetPasswordController");
Route::post("/auth/password/reset/{email}", 'Auth\ResetPasswordController@reset');

route::get('/machinedowntime/create','downtimeformcontroller@downtimeform');

route::post('/machineslistoverview','downlistcontroller@machineslistoverview');
// route::get('/machineslistoverview','GeneralController@machineslistoverview');

route::get("/newmachine", 'newmachineController@index');
route::post("/newmachineform", 'newmachineController@storemachine');
route::post("/machinedowntimelist",'GeneralController@machinedowntimelist');
route::get("/machineslistoverview", 'GeneralController@machineslistoverview');
route::post("/machinedowntime/created", 'GeneralController@created');
// Route::get("/machinesdownsummary",'downtimesummarycontroller@downtimesummary');

//datavisual
Route::get("/datavisual",'datavisualcontroller@datavisual');
Route::get("/testdurationcomparsion",'datavisualcontroller@show1');
Route::get("/samplearrivaldate",'datavisualcontroller@show2');
Route::get("/lifetestschedule",'datavisualcontroller@show3');

Route::get("/import",'importcontroller@index');
Route::post("/store1",'importcontroller@store1');
Route::post("/store2",'importcontroller@store2');

Route::get("/archive",'generalcontroller@archive');

Route::get("/testprotocolmasterview",'generalcontroller@testprotocolmasterview');
Route::get("/testdurationmasterview",'generalcontroller@testdurationmasterview');

Route::get("/newcreatereporttemplate",'generalcontroller@newcreatereporttemplate');

// Route::get('my-chart', 'ChartController@index');
//last edit
Route::any ("/tests/{id}/edit", 'updatedbcontroller@update2');




use App\user;
use App\TestType\A_box_drop_test;
use App\Ticket;
use App\downtimeform;
use App\test_duration;
use App\project;
use App\Test;
use App\testtype;
use App\Notifications\Newvisit;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mailme;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



// Route::any ( '/search', function (){
// 	$q = Input::get ( 'q' );
//     $user = ticket::where ( 'id', 'LIKE', '%' . $q . '%' )->orWhere ( 'project_id', 'LIKE', '%' . $q . '%' )->get ();


//     if (count ( $user ) > 0)
//         return view ( 'search' )->withDetails ( $user )->withQuery ( $q );
//     else
//         return view ( 'search' )->withMessage ( 'No Details found. Try to search again !' );
// } );

Route::any ( '/ticketslist', 'TicketController@search');
Route::any ( '/tickets/date', 'TicketController@searchdate');

Route::any ( '/tests', function (){
    $q = Input::get ( 'q' );
    $user = test::whereHas('project', function($query) use($q) {
    $query->where('project_name', 'like', '%'.$q.'%')->orwhere('product_name', 'like', '%'.$q.'%');
    })->orWhere('id','LIKE','%'.$q.'%')->get()->sortByDesc('updated_at');

    if (count ( $user ) > 0)
        return view ( 'tests.index')->withDetails ( $user )->withQuery ( $q );
    else
        return view ( 'tests.index')->withMessage ( 'No Details found. Try to search again !' );
    });

 
Route::any ( '/machinesdownsummary', function (){
	$q = Input::get ( 'q' );
    $user = downtimeform::where ( 'machinesname', 'LIKE', '%' . $q . '%' )->orWhere ( 'id', 'LIKE', '%' . $q . '%' )->get ();

    if (count ( $user ) > 0)
        return view ( 'machinesdownsummary' )->withDetails ( $user )->withQuery ( $q );
    else
        return view ( 'machinesdownsummary' )->withMessage ( 'No Details found. Try to search again !' );
} );

Route::any ( '/testdurationmasterview', function (){
    $test_durations = test_duration::all();
    $q = Input::get ( 'q' );
    $user = test_duration::where ( 'Test', 'LIKE', '%' . $q . '%' )->orWhere ( 'id', 'LIKE', '%' . $q . '%' )->get ();

    if (count ( $user ) > 0)
        return view ( 'testdurationmasterview' )->withDetails ( $user )->withQuery ( $q );
    else
        return view ( 'testdurationmasterview' )->withMessage ( 'No Details found. Try to search again !' );
} );

// Route::any ( '/samplearrivaldate', function (){
//     $q = Input::get ( 'q' );
//     $user = test::whereHas('project', function($query) use($q) {
//     $query->where('project_name', 'like', '%'.$q.'%')->orwhere('product_name', 'like', '%'.$q.'%');
//     })->orWhere('id','LIKE','%'.$q.'%')->get()->sortByDesc('updated_at');

//     if (count ( $user ) > 0)
//         return view ( 'datavisual.samplearrivaldate')->withDetails ( $user )->withQuery ( $q );
//     else
//         return view ( 'datavisual.samplearrivaldate' )->withMessage ( 'No Details found. Try to search again !' );
//     });

Route::get('exporttickets', function () {

    $tickets = \App\ticket::all();
    $users = \App\user::all();
    $tests = \App\test::all();

    $csvExporter = new \Laracsv\Export();

    return $csvExporter->build($tests, ['id','ticket_id', 'testtype.description', 'ticket.project.project_name', 'ticket.project.product_name','modelcode.code','reason','size','sample_availability','sample_type','project_stage','protocal_deviation','remark','status','est_start_date','actual_start_date','est_end_date','actual_end_date','created_at','test_eng' ])->download();
});

Route::get('exporttests', function () {
   
    $tests = \App\test::all();
    
    $csvExporter = new \Laracsv\Export();

    return $csvExporter->build($tests, ['id','ticket.id', 'ticket.user.name', 'testtype.description', 'size', 'created_at'])->download();
});

Route::post('getIndex', 'Importcontroller@importExcel');
Route::post('gettest', 'Importcontroller@importExcel2');

//Show accepted Tests
//Route::get('/showAccepted','AcceptedTestController@showAllAcceptedTests');

Auth::routes();//For your login, password reset and register. Do not touch or modify the files related to Auth unless you are sure of what you are doing
Route::group(['middleware' => ['auth']], function () {
    //All the routes for scheduling
    Route::get('/testscheduling','ScheduleController@show');
    Route::any('/testscheduling/{id}','ScheduleController@update');
    Route::get('/testscheduling/{id}/machine','ScheduleController@updatemachine');
    Route::any('/testscheduling/{id}/addmachine','ScheduleController@addmachine');
    //Route::get('/testmachines','ScheduleController@showmachine'); Moved to machine controller
    //Route::get('/createschedule','ScheduleController@newschedule');// To create a new year schedule for machine. Not in use.
    //Route::any('/updateschedule','ScheduleController@updateschedule');//Update the schedule 


//Routes for Machines
Route::get('/testmachine','MachineController@showmachines');// Use to display the lists of all the machines available
// Route::get('/testmachine/psg','MachineController@showpsg');//Not in use
// Route::get('/testmachine/dts','MachineController@showdts');//Not in use
// Route::get('/testmachine/watertester','MachineController@showwater_tester');//Not in use
Route::get('/testmachine/bangkok','MachineController@showBangkok');//To see bangkok machine
Route::get('/testmachine/verona','MachineController@showVerona');//To see verona machine
Route::get('/testmachine/xfro','MachineController@showXFRO');//To see xfro machine
Route::get('/testmachine/virtual','MachineController@showVirtual');//For virtual machine i.e. for those tests that do not actually get slotted into the above three machines
Route::get('/testmachine/psgd1','MachineController@showPSGD1');
Route::get('/testmachine/psgd2','MachineController@showPSGD2');
Route::get('/testmachine/psgdts','MachineController@showPSGDTS');
Route::get('testmachine/batampsgdts','MachineController@showBATAMSGDTS');
Route::get('/testmachine/dtslt','MachineController@showDTSLT');
Route::get('/testmachine/cttn','MachineController@showCTTN');
Route::get('/testmachine/wdt1','MachineController@showWDT1');
Route::get('/testmachine/wdt2','MachineController@showWDT2');
Route::get('testmachine/st1','MachineController@showST1');
Route::get('/testmachine/mt1','MachineController@showMT1');
Route::get('/testmachine/iec45','MachineController@showIEC45');
Route::get('/testmachine/iec90','MachineController@showIEC90');
Route::get('testmachine/qt1','MachineController@showQT1');
Route::get('/testmachine/qt2','MachineController@showQT2');
Route::get('/testmachine/qt3','MachineController@showQT3');
Route::get('/testmachine/csz1','MachineController@showCSZ1');
Route::get('/testmachine/oven','MachineController@showOVEN');
Route::get('/testmachine/sdet','MachineController@showSDET');
Route::get('/testmachine/sset','MachineController@showSSET');
Route::get('/testmachine/acst','MachineController@showACST');
Route::get('/testmachine/aet','MachineController@showAET');
Route::get('/testmachine/vtos','MachineController@showVTOS');
//Route::get('','MachineController@show');

// Master Table
Route::get('/mastertable','MasterTableController@show');//Only used to display the master table. The main contoller for this table is still located in UpdatedbController.
});