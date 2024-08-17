<?php

namespace Modules\PatientRegistration\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\PatientRegistration\App\Models\Labtest;

class LabTestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $labtests=Labtest::paginate(10);

        return view('patientregistration::labtests.index', compact('labtests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    // Logic to prepare data for the create view
    return view('patientregistration::labtests.create');
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' =>'required',
            'duration' =>'required',
        ]);
        Labtest::create(
            $request->all(),
        );

        return redirect()->route('labtest.index')->with('success', 'Lab Test created successfully');

    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('labtests.show');
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
