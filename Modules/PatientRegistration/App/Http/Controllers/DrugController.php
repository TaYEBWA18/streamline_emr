<?php

namespace Modules\PatientRegistration\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\PatientRegistration\App\Models\Drug;

class DrugController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {;
        $drugs=Drug::paginate(10);

        return view('patientregistration::drugs.index', compact('drugs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('patientregistration::drugs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' =>'required',
            'brand_name' =>'required',
            'form' =>'required',
        ]);
        Drug::create(
            $request->all(),
        );

        return redirect()->route('drugs.index')->with('success', 'Drug added successfull');
        
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        // return view('drugs::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // return view('drugs::edit');
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
