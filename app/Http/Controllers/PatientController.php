<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use Illuminate\Http\Request;
use DataTables;
use Carbon\Carbon;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $patient = Patients::latest()->get();

        if ($request->ajax()) {
            $data = Patients::latest()->get();
           
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                        $btn = '<a href="{{ route("patient.show","'.$row->id.'") }}" data-toggle="tooltip"  class="edit btn btn-primary btn-sm editPost">View</a>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        
       return view('patients.index',compact('patient')); 
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Patients::updateOrCreate(['id' => $request->id],
                ['physician_id' => $request->get('physician_id'), 
                'lastname' => $request->lastname, 
                'firstname' => $request->firstname,
                'middlename' => $request->middlename, 
                'namext' => $request->namext, 
                'birthdate' => Carbon::createFromFormat('m/d/Y', $request->birthdate),
                'age' => $request->age, 
                'contactno' => $request->contactno, 
                'philhealth' => $request->philhealth, 
                'gender' => $request->get('gender'), 
                'civilstatus' => $request->get('civilstatus'), 
                'address' => $request->address]);        
   
        return response()->json(['success'=>'Patient saved successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function show(Patients $patients)
    {
        var_dump($patients);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function edit(Patients $patient)
    {
        return view('patients.edit',compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patients $patients)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patients $patients)
    {
        Post::find($id)->delete();
     
        return response()->json(['success'=>'Post deleted successfully.']);
    }
}
