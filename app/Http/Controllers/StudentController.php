<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function listOfStudents(){
        $students = Student::all();
        return view('student')->with(compact('students'));
    }

    public function editStudents($id){
        $student = Student::Where('id', $id)->get();
        return view('editStudent')->with(compact('student'));
    }

    public function updateStudent(Request $request){
       $student =  Student::find($request->id);

       $student->name = $request->name;
       $student->city = $request->city;
       $student->phone = $request->phone;
       $student->fecha_nac = $request->fecha_nac;
       $student->degreeCode = $request->degreeCode;

       $student->save();
       return redirect()->route('listOfStudents');
    }

    public function back(){
        return redirect()->route('listOfStudents');
    }
}