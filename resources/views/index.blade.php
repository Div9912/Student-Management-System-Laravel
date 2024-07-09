@extends('layouts.app')
@section('content')
@if(session()->has('message'))
<div class="alert alert-success my-1">
    {{session()->get('message')}}
</div>
@endif
<div class="container my-5 py-5">
    <div class="card">
        <div class="card-body">
        <h2 style="text-align: center;">Students List</h2>
            <table class="table table-bordered mt-3">
                <thead class="thead-light">
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">DOB</th>
                        <th class="text-center">Blood Group</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($student as $key => $student)
                    <tr>
                        <td class="text-center">{{$key+1}}</td>
                        <td class="text-center">{{$student->name}}</td>
                        <td class="text-center">{{$student->dob}}</td>
                        <td class="text-center">{{$student->blood_group}}</td>
                        <td class="text-center">{{$student->phone}}</td>
                        <td class="text-center">
                            <div class="d-flex align-items-center justify-content-center">
                            <a href="{{route('student.show',$student->id)}}" class="btn btn-success"><i class="bi bi-eye-fill text-center"></i></a>
                            <a href="{{route('student.edit',$student->id)}}" class="btn btn-warning mx-1"><i class="bi bi-pencil-square text-center"></i></a>
                            <form action="{{route('student.destroy',$student->id)}}" class="text-center" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger text-center"><i class="bi bi-trash-fill "></i></a>
                            </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{route('student.create')}}" class="btn btn-primary float-end px-2 mx-1">Add Student</a>
            <a href="{{route('attend.create')}}" class="btn btn-primary  float-end px-2 mx-1">Mark Attendance</a>

        </div>
    </div>
</div>
@endsection