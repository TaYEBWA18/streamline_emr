<?php

namespace Modules\PatientRegistration\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\PatientRegistration\App\Models\Diagnosis;   

class DiagnosesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diagnoses = Diagnosis::paginate(10);

        return view('patientregistration::diagnoses.index', compact('diagnoses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('patientregistration::diagnoses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' =>'required',
            'icd_code' =>'required',
            
        ]);
        Diagnosis::create(
            $request->all(),
        );

        return redirect()->route('diagnoses.index')->with('success', 'Diagnosis added successfull');
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
        //
    }
}
