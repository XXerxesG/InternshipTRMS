@extends('layouts.master')

@section ('content')
    {{--Links to  access the different machine--}}
    <div class="container">
        <h2>Collapsible List Group</h2>
        <p>Click on the collapsible panel to open and close it.</p>
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse1"><h4>PSG LT_Scaling</h4></a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="/testmachine/bangkok" style="padding-left:2%">Bangkok Rack</a></li>
                        <li class="list-group-item"><a href="/testmachine/verona" style="padding-left:2%">Verona Rack</a></li>
                        <li class="list-group-item"><a href="/testmachine/xfro" style="padding-left:2%">XPRO Rack</a></li>
                        <li class="list-group-item"><a href="/testmachine/virtual" style="padding-left:2%">Virtual Rack</a></li>
                        <li class="list-group-item"><a href="/testmachine/psgd1" style="padding-left:2%">PSG Dynamic #1</a></li>
                        <li class="list-group-item"><a href="/testmachine/psgd2" style="padding-left:2%">PSG Dynamic #2</a></li>
                        <li class="list-group-item"><a href="/testmachine/psgdts" style="padding-left:2%">Adhoc PSG/DTS Tester</a></li>
                        <li class="list-group-item"><a href="/testmachine/batampsgdts" style="padding-left:2%">Batam->DTS & PSG</a></li>
                    </ul>
                </div>

                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse2"><h4>DTS LT</h4></a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="/testmachine/dtslt" style="padding-left:2%">DTS Life Test Rack</a></li>
                    </ul>
                </div>

                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse3"><h4>DTS Scaling</h4></a>
                    </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="/testmachine/cttn" style="padding-left:2%">Cttn Scaling</a></li>
                    </ul>
                </div>

                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse4"><h4>Wear Test</h4></a>
                    </h4>
                </div>
                <div id="collapse4" class="panel-collapse collapse">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="/testmachine/wdt1" style="padding-left:2%">Wet/Dry Tester 1</a></li>
                        <li class="list-group-item"><a href="/testmachine/wdt2" style="padding-left:2%">Wet/Dry Tester 2</a></li>
                    </ul>
                </div>


                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse5"><h4>Steamer Test</h4></a>
                    </h4>
                </div>
                <div id="collapse5" class="panel-collapse collapse">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="/testmachine/st1" style="padding-left:2%">Steamer Tester #1- One Type Water</a></li>
                        <li class="list-group-item"><a href="/testmachine/mt1" style="padding-left:2%">Modena Tester #2- Movement</a></li>
                    </ul>
                </div>


                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse6"><h4>Flexing Test</h4></a>
                    </h4>
                </div>
                <div id="collapse6" class="panel-collapse collapse">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="/testmachine/iec45" style="padding-left:2%">IEC Flexing 45-45 Degree</a></li>
                        <li class="list-group-item"><a href="/testmachine/iec90" style="padding-left:2%">IEC Flexing 90-90 Degree</a></li>
                    </ul>
                </div>


                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse7"><h4>Quenching Test</h4></a>
                    </h4>
                </div>
                <div id="collapse7" class="panel-collapse collapse">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="/testmachine/qt1" style="padding-left:2%">Quenching Tester 1</a></li>
                        <li class="list-group-item"><a href="/testmachine/qt2" style="padding-left:2%">Quenching Tester 2</a></li>
                        <li class="list-group-item"><a href="/testmachine/qt3" style="padding-left:2%">Quenching Tester 3</a></li>
                    </ul>
                </div>


                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse8"><h4>Climatic Chamber Test</h4></a>
                    </h4>
                </div>
                <div id="collapse8" class="panel-collapse collapse">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="/testmachine/csz1" style="padding-left:2%">CSZ Chamber #1</a></li>
                        <li class="list-group-item"><a href="/testmachine/oven" style="padding-left:2%">Oven</a></li>
                    </ul>
                </div>

                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse9"><h4>Endurance Test</h4></a>
                    </h4>
                </div>
                <div id="collapse9" class="panel-collapse collapse">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="/testmachine/sdet" style="padding-left:2%">Thermostat/Snap Disc Endurance Tester</a></li>
                        <li class="list-group-item"><a href="/testmachine/sset" style="padding-left:2%">SOS/Spray Endurance Tester</a></li>
                        <li class="list-group-item"><a href="/testmachine/acst" style="padding-left:2%">ASO Continuous Steaming Tester</a></li>
                        <li class="list-group-item"><a href="/testmachine/aet" style="padding-left:2%">ASO Endurance Tester</a></li>

                    </ul>
                </div>

                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse10"><h4>Vibration Test Operation Schedule</h4></a>
                    </h4>
                </div>
                <div id="collapse10" class="panel-collapse collapse">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="/testmachine/vtos" style="padding-left:2%">Vibration Test Operation</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
@endsection