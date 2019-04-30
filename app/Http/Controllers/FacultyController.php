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
        return view ('faculty.index', ['FacultyDataList'=> $FacultyDataList]);
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
            
            'faculty_name' => 'required|max:50|alpha_dash'
           
        ]);

        $form_data = array(
            
            'faculty_name' => $request->faculty_name,
        );

        Faculty::create($form_data);
        return redirect()->route('faculty.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function show(Faculty $faculty)
    {
        $FacultyData = Faculty::findOrFail($faculty->faculty_id);
        return view('faculty.view', compact('FacultyData'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function edit(Faculty $faculty)
    {
        $FacultyData = Faculty::findOrFail($faculty->faculty_id);
        return view('faculty.edit', compact('FacultyData'));
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
            
            'faculty_name' => $request->faculty_name
        );
  
        Faculty::where('faculty_id',$faculty->faculty_id)->update($form_data);
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
        $FacultyData = Faculty::findOrFail($faculty->faculty_id);
        $FacultyData -> delete();
        return redirect()->route('faculty.index');
    }
}
