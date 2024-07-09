@extends('layouts.app')
@section('content')
@if(session()->has('message'))
@endif
<div class="container my-5 py-5">
    <div class="card">
        <div class="card-body">
            <h2 style="text-align: center;">Student Data</h2>
            <div class="form-stud">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{$student->name}}" class="form-control" readonly>
            </div>
            <div class="form-stud my-2">
                <label for="dob">DOB</label>
                <input type="date" name="dob" value="{{$student->dob}}" class="form-control" readonly>
            </div>
            <div class="form-stud my-2">
                <label for="blood_group">Blood Group</label>
                <input type="text" name="blood_group" value="{{$student->blood_group}}" class="form-control" readonly>
            </div>
            <div class="form-stud my-2">
                <label for="phone">Phone No.</label>
                <input type="text" name="phone" value="{{$student->phone}}" class="form-control" readonly>
            </div>
            <a href="{{route('student.index')}}" class="btn btn-info float-end">Back</a>

        </div>
    </div>
</div>
@endsection