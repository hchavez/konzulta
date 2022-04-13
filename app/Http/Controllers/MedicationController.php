<?php

namespace App\Http\Controllers;

use App\Models\Medication;
use Illuminate\Http\Request;

class MedicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('patients.medications'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medications  $medications
     * @return \Illuminate\Http\Response
     */
    public function show(Medication $medications)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medication  $medications
     * @return \Illuminate\Http\Response
     */
    public function edit(Medication $medications)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medications  $medications
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medication $medications)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medication  $medications
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medication $medications)
    {
        //
    }
}
