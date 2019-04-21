<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index()
    {
      $CourseDataList = Course::all();
      return view ('course.index', ['CourseDataList'=> $CourseDataList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('course.create');
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
          'course_name' => 'required|max:50|alpha_dash'

      ]);

      $form_data = array(
          'course_name' => $request->course_name,
      );

      Course::create($form_data);
      return view('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
      $CourseData = Course::findOrFail($course->course_name);
      return view('course.edit', compact('CourseData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
      $form_data = array(
          'course_name' => $request->course_name
      );
      Course::where('course_name',$course->course_name)->update($form_data);
      return redirect()->route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
      $CourseData = Student::findOrFail($course->course_name);
      $CourseData -> delete();
      echo "Delete Successfully";
      if($CourseData -> delete()){
          echo "Delete Successfully";
    }
}
}
