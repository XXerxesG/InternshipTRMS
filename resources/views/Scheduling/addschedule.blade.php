@extends('layouts.master')

@section ('content')

{{--Not being used--}}
<h1>Create a  yearly schedule for machine</h1>
<form action="/updateschedule" method="POST">
    {{ csrf_field() }} 
   <fieldset>
      <legend>Selecting elements</legend>
      <p>
         <label>Select list</label>
         <select name="machines" id = "machines">
           <option value = "bangkok">Bangkok</option>
           <option value = "Verona">Verona</option>
           <option value = "XFRO">XFRO</option>
           
         </select>
      </p>
   </fieldset>

   <label> which year is it?</label>
    <input type="number" class="form-control" name="year" id="year">
   <button class="btn btn-dark">submitt</button>
</form>


@endsection