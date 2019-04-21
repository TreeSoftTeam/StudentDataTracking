<?php

namespace App\Http\Controllers;

use App\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $FacultyDataList = Faculty::all();
        return view ('Faculty.index', ['FacultyDataList'=> $FacultyDataList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('faculty.create');
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
            'faculty_code' => 'required|max:15|alpha_dash|unique:faculty,faculty_code',
            'fullname' => 'required|max:50|alpha_dash'
           
        ]);

        $form_data = array(
            'faculty_code' => $request->faculty_code,
            'fullname' => $request->fullname,
        );

        Student::create($form_data);
        return view('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function show(Faculty $faculty)
    {
        $FacultyData = Faculty::findOrFail($faculty->faculty_code);
        return view('faculty.view', compact('FacultytData'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function edit(Faculty $faculty)
    {
        $FacultyData = Faculty::findOrFail($faculty->faculty_code);
        return view('faculty.edit', compact('FacultytData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faculty $faculty)
    {
        $form_data = array(
            'faculty_code' => $request->faculty_code,
            'fullname' => $request->fullname
        );
  
        Faculty::where('faculty_code',$faculty->faculty_code)->update($form_data);
        return redirect()->route('faculty.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faculty $faculty)
    {
        $FacultyData = Student::findOrFail($faculty->faculty_code);
        $FacultyData -> delete();
        echo "Delete Successfully";
        if($FacultyData -> delete()){
            echo "Delete Successfully";
        }
    }
}
