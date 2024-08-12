<?php

namespace Modules\PatientRegistration\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\PatientRegistration\App\Models\PatientModel;
use Modules\PatientRegistration\App\Http\Requests\CreatePatientRequest;

class PatientRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('patientregistration::index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('patientregistration::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePatientRequest $request): RedirectResponse
    {
    
        $validatedData = $request->validated();
        // dd($request->validated());
        PatientModel::create($validatedData);

        
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
        //
    }
}
