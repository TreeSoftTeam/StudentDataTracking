<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $DepartmentDataList = Department::all();
        return view ('Department.index', ['DepartmentDataList'=> $DepartmentDataList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('department.create');
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
            'department_code' => 'required|max:15|alpha_dash|unique:department,department_code',
            'fullname' => 'required|max:50|alpha_dash'
           
        ]);

        $form_data = array(
            'department_code' => $request->department_code,
            'fullname' => $request->fullname,
        );

        Student::create($form_data);
        return view('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        $DepartmentData = Department::findOrFail($department->department_code);
        return view('department.view', compact('DepartmentData'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        $DepartmentData = Department::findOrFail($department->department_code);
        return view('department.edit', compact('DepartmentData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        $form_data = array(
            'department_code' => $request->department_code,
            'fullname' => $request->fullname
        );
  
        Department::where('department_code',$department->department_code)->update($form_data);
        return redirect()->route('department.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        $DepartmentData = Student::findOrFail($department->department_code);
        $DepartmentData -> delete();
        echo "Delete Successfully";
        if($DepartmentData -> delete()){
            echo "Delete Successfully";
        }
    }
}
