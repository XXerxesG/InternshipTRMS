<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ticket;
use App\Test;
use App\project;
use App\TestType;

class MachineController extends Controller
{
    public function showmachines(){
        $tests=Test::where([['scheduling','1'],['approved','1']])->get();
        $testtype = testtype::all();
        $ticket = ticket::all();
        return view('Scheduling.showmachines',compact('tests','testtype','ticket'));
    }
    
    public function showBangkok(){
        //get all the tests which have been scheduled, accepted and have machine called Bangkok
        $tests=Test::where([['scheduling','1'],['approved','1'],['machine','Bangkok']])->orderBy('id','desc')->get();
        $testtype = testtype::all();
        $ticket = ticket::all();
        return view('Scheduling.bangkok',compact('tests','testtype','ticket'));
    }
    public function showVerona(){
        $tests=Test::where([['scheduling','1'],['approved','1'],['machine','Verona']])->orderBy('id','desc')->get();
        $testtype = testtype::all();
        $ticket = ticket::all();
        return view('Scheduling.verona',compact('tests','testtype','ticket'));
    }
    public function showXFRO(){
        $tests=Test::where([['scheduling','1'],['approved','1'],['machine','XFRO']])->orderBy('id','desc')->get();
        $testtype = testtype::all();
        $ticket = ticket::all();
        return view('Scheduling.xfro',compact('tests','testtype','ticket'));
    }
    public function showVirtual(){
        $tests=Test::where([['scheduling','1'],['approved','1'],['machine','Virtual']])->orderBy('id','desc')->get();
        $testtype = testtype::all();
        $ticket = ticket::all();
        return view('Scheduling.virtual',compact('tests','testtype','ticket'));
    }

    public function showPSGD1(){
        $tests=Test::where([['scheduling','1'],['approved','1'],['machine','PSGD1']])->orderBy('id','desc')->get();
        $testtype = testtype::all();
        $ticket = ticket::all();
        return view('Scheduling.virtual',compact('tests','testtype','ticket'));
    }
    public function showPSGD2(){
        $tests=Test::where([['scheduling','1'],['approved','1'],['machine','PSGD2']])->orderBy('id','desc')->get();
        $testtype = testtype::all();
        $ticket = ticket::all();
        return view('Scheduling.virtual',compact('tests','testtype','ticket'));
    }
    public function showPSGDTS(){
        $tests=Test::where([['scheduling','1'],['approved','1'],['machine','PSGDTS']])->orderBy('id','desc')->get();
        $testtype = testtype::all();
        $ticket = ticket::all();
        return view('Scheduling.virtual',compact('tests','testtype','ticket'));
    }
    public function showBATAMSGDTS(){
        $tests=Test::where([['scheduling','1'],['approved','1'],['machine','BATAMSGDTS']])->orderBy('id','desc')->get();
        $testtype = testtype::all();
        $ticket = ticket::all();
        return view('Scheduling.virtual',compact('tests','testtype','ticket'));
    }
    public function showDTSLT(){
        $tests=Test::where([['scheduling','1'],['approved','1'],['machine','DTSLT']])->orderBy('id','desc')->get();
        $testtype = testtype::all();
        $ticket = ticket::all();
        return view('Scheduling.virtual',compact('tests','testtype','ticket'));
    }
    public function showCTTN(){
        $tests=Test::where([['scheduling','1'],['approved','1'],['machine','CTTN']])->orderBy('id','desc')->get();
        $testtype = testtype::all();
        $ticket = ticket::all();
        return view('Scheduling.virtual',compact('tests','testtype','ticket'));
    }
    public function showWDT1(){
        $tests=Test::where([['scheduling','1'],['approved','1'],['machine','WDT1']])->orderBy('id','desc')->get();
        $testtype = testtype::all();
        $ticket = ticket::all();
        return view('Scheduling.virtual',compact('tests','testtype','ticket'));
    }
    public function showWDT2(){
        $tests=Test::where([['scheduling','1'],['approved','1'],['machine','WDT2']])->orderBy('id','desc')->get();
        $testtype = testtype::all();
        $ticket = ticket::all();
        return view('Scheduling.virtual',compact('tests','testtype','ticket'));
    }
    public function showST1(){
        $tests=Test::where([['scheduling','1'],['approved','1'],['machine','ST1']])->orderBy('id','desc')->get();
        $testtype = testtype::all();
        $ticket = ticket::all();
        return view('Scheduling.virtual',compact('tests','testtype','ticket'));
    }
    public function showMT1(){
        $tests=Test::where([['scheduling','1'],['approved','1'],['machine','MT1']])->orderBy('id','desc')->get();
        $testtype = testtype::all();
        $ticket = ticket::all();
        return view('Scheduling.virtual',compact('tests','testtype','ticket'));
    }
    public function showIEC45(){
        $tests=Test::where([['scheduling','1'],['approved','1'],['machine','IEC45']])->orderBy('id','desc')->get();
        $testtype = testtype::all();
        $ticket = ticket::all();
        return view('Scheduling.virtual',compact('tests','testtype','ticket'));
    }
    public function showIEC90(){
        $tests=Test::where([['scheduling','1'],['approved','1'],['machine','IEC90']])->orderBy('id','desc')->get();
        $testtype = testtype::all();
        $ticket = ticket::all();
        return view('Scheduling.virtual',compact('tests','testtype','ticket'));
    }
    public function showQT1(){
        $tests=Test::where([['scheduling','1'],['approved','1'],['machine','QT1']])->orderBy('id','desc')->get();
        $testtype = testtype::all();
        $ticket = ticket::all();
        return view('Scheduling.virtual',compact('tests','testtype','ticket'));
    }
    public function showQT2(){
        $tests=Test::where([['scheduling','1'],['approved','1'],['machine','QT2']])->orderBy('id','desc')->get();
        $testtype = testtype::all();
        $ticket = ticket::all();
        return view('Scheduling.virtual',compact('tests','testtype','ticket'));
    }
    public function showQT3(){
        $tests=Test::where([['scheduling','1'],['approved','1'],['machine','QT3']])->orderBy('id','desc')->get();
        $testtype = testtype::all();
        $ticket = ticket::all();
        return view('Scheduling.virtual',compact('tests','testtype','ticket'));
    }
    public function showCSZ1(){
        $tests=Test::where([['scheduling','1'],['approved','1'],['machine','CSZ1']])->orderBy('id','desc')->get();
        $testtype = testtype::all();
        $ticket = ticket::all();
        return view('Scheduling.virtual',compact('tests','testtype','ticket'));
    }
    public function showOVEN(){
        $tests=Test::where([['scheduling','1'],['approved','1'],['machine','OVEN']])->orderBy('id','desc')->get();
        $testtype = testtype::all();
        $ticket = ticket::all();
        return view('Scheduling.virtual',compact('tests','testtype','ticket'));
    }
    public function showSDET(){
        $tests=Test::where([['scheduling','1'],['approved','1'],['machine','SDET']])->orderBy('id','desc')->get();
        $testtype = testtype::all();
        $ticket = ticket::all();
        return view('Scheduling.virtual',compact('tests','testtype','ticket'));
    }
    public function showSSET(){
        $tests=Test::where([['scheduling','1'],['approved','1'],['machine','SSET']])->orderBy('id','desc')->get();
        $testtype = testtype::all();
        $ticket = ticket::all();
        return view('Scheduling.virtual',compact('tests','testtype','ticket'));
    }
    public function showACST(){
        $tests=Test::where([['scheduling','1'],['approved','1'],['machine','ACST']])->orderBy('id','desc')->get();
        $testtype = testtype::all();
        $ticket = ticket::all();
        return view('Scheduling.virtual',compact('tests','testtype','ticket'));
    }
    public function showAET(){
        $tests=Test::where([['scheduling','1'],['approved','1'],['machine','AET']])->orderBy('id','desc')->get();
        $testtype = testtype::all();
        $ticket = ticket::all();
        return view('Scheduling.virtual',compact('tests','testtype','ticket'));
    }
    public function showVTOS(){
        $tests=Test::where([['scheduling','1'],['approved','1'],['machine','VTOS']])->orderBy('id','desc')->get();
        $testtype = testtype::all();
        $ticket = ticket::all();
        return view('Scheduling.virtual',compact('tests','testtype','ticket'));
    }
}
