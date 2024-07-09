<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

   
        $student = student::orderBy('name', 'asc')->get();
        return view('index', compact('student'));

   

    }
    public function showAttendanceForm()
    {
        $student = student::orderBy('name','asc')->get();
       return redirect()->route('attend.create')->with('student', $student);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|unique:student,name',
            'dob' => 'required|date',
            'blood_group' => 'required',
            'phone' => 'required|numeric|unique:student,phone'
        ]);

        $data = $request->except('_token');
        student::create($data);
        //  dd('Successfully created');

        return redirect()->route('student.index')->withMessage('Student has been added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        return view('show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {

        return view('edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, student $student)
    {
        $request->validate([
            'name' => 'required|unique:student,name,' . $student->id . '',
            'dob' => 'required|date',
            'blood_group' => 'required',
            'phone' => 'required|numeric|unique:student,phone,' . $student->id . ''
        ]);

        $data = $request->all();
        $student->update($data);



        return redirect()->route('student.edit', $student->id)->withMessage('Student details has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student)
    {
        $student->delete();
        return redirect()->route('student.index', $student->id)->withMessage('Student details deleted successfully');
    }
}
