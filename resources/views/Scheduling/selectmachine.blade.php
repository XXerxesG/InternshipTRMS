@extends ('layouts.master')

@section ('content')
<div class="container">

			<div class="modal-header">
				<h1 class="modal-title">Assign a Machine</h1>
			</div>
			<div class="modal-body">
				<form method="POST" action="/testscheduling/{{ $t->id }}/addmachine">
					{{ csrf_field() }}
					{{ method_field('patch') }}
                    <h4><strong>For Test ID:{{ $t->id }}</strong></h4>
                        <div class="radio">
                            <label><input type="radio" name="status" value="Bangkok" @if($t->machine=='Bangkok')checked @endif>Bangkok Rack</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="status" value="Verona"@if($t->machine=='Verona')checked @endif>Verona Rack</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="status" value="XFRO"@if($t->machine=='XFRO')checked @endif>XFRO Rack</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="status" value="Virtual"@if($t->machine=='Virtual')checked @endif>Virtual Rack</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="status" value="PSGD1"@if($t->machine=='PSGD1')checked @endif>PSG DYNAMIC 1 Rack</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="status" value="PSGD2"@if($t->machine=='PSGD2')checked @endif>PSG Dynamic 2 Rack</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="status" value="PSGDTS"@if($t->machine=='PSGDTS')checked @endif>Adhoc PSG/DTS Tester</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="status" value="BATAMSGDTS"@if($t->machine=='BATAMSGDTS')checked @endif>BATAM->DTS & PSG</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="status" value="DTSLT"@if($t->machine=='DTSLT')checked @endif>DTS Life Test Rack</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="status" value="CTTN"@if($t->machine=='CTTN')checked @endif>CTTN Scaling</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="status" value="WDT1"@if($t->machine=='WDT1')checked @endif>Wet Dry Test 1</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="status" value="WDT2"@if($t->machine=='WDT2')checked @endif>Wet Dry Test 2</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="status" value="ST1"@if($t->machine=='ST1')checked @endif>Steamer Tester #1- One Type Water</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="status" value="MT1"@if($t->machine=='MT1')checked @endif>Modena Tester #2- Movement</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="status" value="IEC45"@if($t->machine=='IEC45')checked @endif>IEC Flexing 45-45 Degree</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="status" value="IEC90"@if($t->machine=='IEC90')checked @endif>IEC Flexing 90-90 Degree</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="status" value="QT1"@if($t->machine=='QT1')checked @endif>Quenching Tester 1</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="status" value="QT2"@if($t->machine=='QT2')checked @endif>Quenching Tester 2</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="status" value="QT3"@if($t->machine=='QT3')checked @endif>Quenching Tester 3</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="status" value="CSZ1"@if($t->machine=='CSZ1')checked @endif>CSZ Chamber #1</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="status" value="OVEN"@if($t->machine=='OVEN')checked @endif>Oven</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="status" value="SDET"@if($t->machine=='SDET')checked @endif>Thermostat/Snap Disc Endurance Tester</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="status" value="SSET"@if($t->machine=='SSET')checked @endif>SOS/Spray Endurance Tester</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="status" value="ACST"@if($t->machine=='ACST')checked @endif>ASO Continuous Steaming Tester</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="status" value="AET"@if($t->machine=='AET')checked @endif>ASO Endurance Tester</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="status" value="VTOS"@if($t->machine=='VTOS')checked @endif>Vibration Test Operation</label>
                        </div>
                        <div class="text-right">
                                <a href="/mastertable" class="btn btn-primary" data-dismiss="modal">Close</a>
                                <button type="submit" class="btn btn-success">Save changes</button>
                            </div>
                        </form>
@endsection