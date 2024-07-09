<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/student',[StudentController::class,'index'])->name('student.index');
Route::get('/student/create',[StudentController::class,'create'])->name('student.create');
Route::post('/student/store',[StudentController::class,'store'])->name('student.store');
Route::get('/student/{student}',[StudentController::class,'show'])->name('student.show');
Route::get('/student/{student}/edit',[StudentController::class,'edit'])->name('student.edit');
Route::put('/student/{student}/',[StudentController::class,'update'])->name('student.update');
Route::delete('/student/{student}',[StudentController::class,'destroy'])->name('student.destroy');


Route::get('/attend/create',[AttendanceController::class,'create'])->name('attend.create');
