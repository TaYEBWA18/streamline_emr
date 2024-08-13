<?php

namespace Modules\PatientRegistration\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\PatientRegistration\App\Models\Patient;
use Modules\PatientRegistration\App\Http\Requests\CreatePatientRequest;

class PatientRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::paginate(10);
        // $patients = Patient::with('user')->get();

        // return($patients);
        return view('patientregistration::index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $userId = auth()->user()->id; // Get the logged-in user's ID using auth
        // dd($userId);
        return view('patientregistration::create', compact('userId'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePatientRequest $request): RedirectResponse
    {
    
        $validatedData = $request->validated();
        // dd($request->validated());
        $userId = $request->input('user_id');
        // dd($validatedData);
        Patient::create($validatedData);

        
        return redirect()->route('patientregistration.index')
                        ->with('success','Patient created successfully.');
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('patientregistration::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('patientregistration::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $patients=Patient::findOrFail($id);

        $patients->delete();
         
        return redirect()->route('patientregistration.index')
                        ->with('success','Patient deleted successfully');
    }
    //Show innactive patients view
    //to implement soft deletes
    public function inactivePatients(){
       $patients=Patient::onlyTrashed()->paginate(10);//view only trashed patients
       return view('patientregistration::inactivePatients', compact('patients'));
    }

    //Restoration Function
    public function restore($id){

        // $patient = Patient::withTrashed()->findOrFail($id);

        $patient=Patient::withTrashed()->where('id',$id)->first();//find the trashed patient id and restore it on click

        $patient->restore();

        return redirect()->route('patients.inactive')->with('success', 'Patient Restored successfuly');

    }
}
