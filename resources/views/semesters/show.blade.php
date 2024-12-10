@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Semesters Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $semesters->name }}</h5>
        <p class="card-text">Course ID: {{ $semesters->course_id }}</p>
        <p class="card-text">Start Date : {{ $semesters->start_date }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection