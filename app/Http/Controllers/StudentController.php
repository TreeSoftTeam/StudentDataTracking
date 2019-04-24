<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $StudentDataList = Student::all();
        return view ('student.index', ['StudentDataList'=> $StudentDataList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'student_code' => 'required|max:15|alpha_dash|unique:student,student_code',
            'fullname' => 'required|max:50'
           
        ]);

        $form_data = array(
            'student_code' => $request->student_code,
            'fullname' => $request->fullname,
        );

        Student::create($form_data);
        return redirect('student');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $StudentData = Student::findOrFail($student->student_code);
        return view('student.view', compact('StudentData'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $StudentData = Student::findOrFail($student->student_code);
        return view('student.edit', compact('StudentData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $form_data = array(
            'student_code' => $request->student_code,
            'fullname' => $request->fullname
        );
  
        Student::where('student_code',$student->student_code)->update($form_data);
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $StudentData = Student::findOrFail($student->student_code);
        $StudentData -> delete();
        echo "Delete Successfully";
        if($StudentData -> delete()){
            echo "Delete Successfully";
        }
    }
}
