@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Payments Section</div>
  <div class="card-body">
      
      <form action="{{ url('payments') }}" method="post">
        {!! csrf_field() !!}
        <label>Student ID</label></br>

        <select name = 'student_id' id ='student_id' class='form-control'>
          @foreach($students as $student_id => $student_id)
          <option value ="{{$student_id}}">{{ $student_id}} </option>
          @endforeach
        </select></br>

        <label>Paid Date</label></br>
        <input type="text" name="paid_date" id="paid_date" class="form-control"></br>
        
        <label>Amount</label></br>
        <input type="text" name="amount" id="amount" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop