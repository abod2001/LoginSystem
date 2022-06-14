<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Clinics;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ddd=Doctor::all();
        return view('doctor.index',compact('ddd'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clin=Clinics::all();
        return view('doctor.create',compact('clin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $val=$request->validate([
            'doctor_name' => 'required | min:5',
            'doctor_address' => 'required | min:7',
            'clinic_id' => 'required',
            'gender' => 'required',
            'email' => 'required | min:10',
        ]);
        Doctor::create($request->all());
        return redirect('doctor');
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
        $dredit=Doctor::find($id);
        $clin=Clinics::all();
        return view('doctor.edit',compact('dredit','clin'));
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
        $val=$request->validate([
            'doctor_name' => 'required | min:5',
            'doctor_address' => 'required | min:7',
            'clinic_id' => 'required',
            'gender' => 'required',
            'email' => 'required | min:10',
        ]);
        $drupd=Doctor::find($id);
        $drupd->update($request->all());
        return redirect('doctor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $drdel=Doctor::find($id);
        $drdel->delete();
        return redirect('doctor');
    }
}
