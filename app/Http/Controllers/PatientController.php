<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use Carbon\Carbon;
use App\Models\Patient;
use App\Models\Consultation;
use App\Models\Medication;
use App\Models\Billing;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $patient = Patient::latest()->get();

        if ($request->ajax()) {
            $data = Patient::latest()->get();
           
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
        Patient::updateOrCreate(['id' => $request->id],
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
    public function show(Patient $patients)
    {
        var_dump($patients);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        $patient = Patient::find($patient->id);

        $consultationslatest = Consultation::where('patient_id',1)->orderBy('created_at','desc')->limit(1)->get();
        foreach ($consultationslatest  as $medication) {
            //  echo $medication->temp;
        }
        return view('patients.edit',compact('patient','consultationslatest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patients)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patients)
    {
        Patient::find($id)->delete();
     
        return response()->json(['success'=>'Post deleted successfully.']);
    }
}
