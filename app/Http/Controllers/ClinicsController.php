<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clinics;

class ClinicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ccc=Clinics::all();
        return view('clinic.index',compact('ccc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clinic.create');
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
            'clinic_name' => 'required | min:5',
            'clinic_site' => 'required',
        ]);
        Clinics::create($request->all());
        return redirect('clinic');
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
        $eee=Clinics::find($id);
        return view('clinic.edit',compact('eee'));
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
            'clinic_name' => 'required | min:5',
            'clinic_site' => 'required',
        ]);
        $eeee=Clinics::find($id);
        $eeee->update($request->all());
        return redirect('clinic');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=Clinics::find($id);
        $del->delete();
        return redirect('clinic');
    }
}