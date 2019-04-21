<?php

namespace App\Http\Controllers;

use App\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $StatusDataList = Status::all();
      return view ('status.index', ['StatusDataList'=> $StatusDataList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('status.create');
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
          'status_name' => 'required|max:50|alpha_dash'

      ]);

      $form_data = array(
          'status_name' => $request->status_name,
      );

      Status::create($form_data);
      return view('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function show(Status $status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function edit(Status $status)
    {
      $StatusData = Course::findOrFail($status->status_name);
      return view('status.edit', compact('StatusData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Status $status)
    {
      $form_data = array(
          'status_name' => $request->status_name
      );
      Status::where('status_name',$status->status_name)->update($form_data);
      return redirect()->route('status.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function destroy(Status $status)
    {
      $StatusData = Student::findOrFail($status->status_name);
      $StatusData -> delete();
      echo "Delete Successfully";
      if($StatusData -> delete()){
          echo "Delete Successfully";
    }
}
