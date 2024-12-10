@extends('layout')

@section('content')
    <div class="card">
        <h5><div class="card-header">Welcome to the Home Page</div></h5>
        <div class="card-body">
            <p>Manage your Sytem efficiently!</p></br>
            <div class="row">
                <div class="col-md-3">
                    <a href="{{ url('/students') }}" class="btn btn-primary w-100">View Students</a>
                </div>
                <div class="col-md-3">
                    <a href="{{ url('/teachers') }}" class="btn btn-success w-100">View Teachers</a>
                </div>
                <div class="col-md-3">
                    <a href="{{ url('/courses') }}" class="btn btn-warning w-100">View Courses</a>
                </div>
                <div class="col-md-3">
                    <a href="{{ url('/payments') }}" class="btn btn-info w-100">View Payments</a>
                </div>
            </div>
        </div>
    </div>
@endsection
