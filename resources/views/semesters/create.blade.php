@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Semesters Page</div>
  <div class="card-body">
      
      <form action="{{ url('semesters') }}" method="post">
        {!! csrf_field() !!}
        <label>Semester Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Course</label></br>
        <!---<input type="text" name="course_id" id="course_id" class="form-control"></br>--->
        
        <select name = 'course_id' id ='course_id' class='form-control'>
          @foreach($courses as $course_id => $name)
          <option value ="{{$course_id}}">{{ $name}} </option>
          @endforeach
        </select></br>

        <label>Start Date</label></br>
        <input type="text" name="start_date" id="start_date" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop