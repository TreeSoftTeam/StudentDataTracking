<?php

namespace App\Http\Controllers;

use App\Marital_status;
use Illuminate\Http\Request;

class Marital_statusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Marital_statusDataList = Marital_status::all();
      return view ('marital_status.index', ['Marital_statusDataList'=> $Marital_statusDataList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Marital_statusDataList = Marital_status::all();
        return view ('marital_status.create',['Marital_statusDataList'=>$Marital_statusDataList]);
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
          'marital_status_name' => 'required|max:50|alpha_dash'

      ]);

      $form_data = array(
          'marital_status_name' => $request->marital_status_name,
      );

      Marital_status::create($form_data);
      return redirect()->action('Marital_statusController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function show(Marital_status $marital_status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function edit(Marital_status $marital_status)
    {
      $Marital_statusData = Marital_status::findOrFail($marital_status->marital_status_id);
      return view('marital_status.edit', compact('Marital_statusData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Marital_status $marital_status)
    {
      $form_data = array(
          'marital_status_name' => $request->marital_status_name
      );
      Marital_status::where('status_name',$marital_status->marital_status_name)->update($form_data);
      return redirect()->route('marital_status.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marital_status $marital_status)
    {
      $Marital_statusData = Marital_status::findOrFail($marital_status->marital_status_id);
      $Marital_statusData -> delete();
      return redirect()->route('marital_status.index');

    }
}
