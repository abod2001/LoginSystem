<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ppp=Patient::all();
        return view('patient.index',compact('ppp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patient.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid=$request->validate([
            'patient_name' => 'required | min:3',
            'patient_address' => 'required | min:4',
            'gender' => 'required',
            'phone' => 'required | max:10',
            'age' => 'required | max:3',
        ]);
        Patient::create($request->all());
        return redirect('patient');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pppp=Patient::find($id);
        return view('patient.edit',compact('pppp'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $valid=$request->validate([
            'patient_name' => 'required | min:3',
            'patient_address' => 'required | min:4',
            'gender' => 'required',
            'phone' => 'required | max:10',
            'age' => 'required | max:3',
        ]);
        $ppppp=Patient::find($id);
        $ppppp->update($request->all());
        return redirect('patient');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delpa=Patient::find($id);
        $delpa->delete();
        return redirect('patient');

    }
}
