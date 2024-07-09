@extends('layouts.app')
@section('content')
@if(session()->has('message'))
<div class="alert alert-success">
{{session()->get('message')}}
</div>
@endif
<div class="container my-5 py-5">
    <div class="card">
    
        <div class="card-body">
            <h2 class="text-center">Edit Student</h2>
            <form action="{{route('student.update',$student->id)}}" class="was-validated" method="POST" novalidate>
                @method('PUT')
                @csrf
                <div class="form-stud">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{$student->name}}" class="form-control {{$errors->has('name')?'is-invalid':''}}" required>
                    @if($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('name')}}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-stud my-2">
                    <label for="dob">DOB</label>
                    <input type="date" name="dob" value="{{$student->dob}}" class="form-control {{$errors->has('dob')?'is-invalid':''}}" required >
                    @if($errors->has('dob'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('dob')}}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-stud my-2">
                    <label for="blood_group">Blood Group</label>
                    <select name="blood_group" id="blood_group" value="{{old('blood_group')}}" class="form-control {{$errors->has('blood_group')?'is-invalid':''}}>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>             
                           @if($errors->has('blood_group'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('blood_group')}}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-stud my-2">
                    <label for="phone">Phone No.</label>
                    <input type="text" name="phone" value="{{$student->phone}}" class="form-control {{$errors->has('phone')?'is-invalid':''}}" required>
                    @if($errors->has('phone'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('phone')}}</strong>
                    </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary float-end  mx-2 px-3">Save</button>
                <a href="{{route('student.index')}}" class="btn btn-info float-end">Back</a>
            </form>
        </div>
   
</div>

@endsection