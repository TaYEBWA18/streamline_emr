<?php

use Illuminate\Support\Facades\Route;
use Modules\PatientRegistration\App\Http\Controllers\PatientRegistrationController;
use Modules\PatientRegistration\App\Http\Controllers\LabTestController;
use Modules\PatientRegistration\App\Http\Controllers\DrugController;
use Modules\PatientRegistration\App\Http\Controllers\DiagnosesController;
use Modules\PatientRegistration\App\Http\Controllers\RecordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware'=>['auth']], function () { //middleware to protect the 
    Route::resource('patients', PatientRegistrationController::class);
    Route::get('/inactivePatients', [PatientRegistrationController::class, 'inactivePatients'])->name('patients.inactive');
    Route::post('/patient/{id}/restore', [PatientRegistrationController::class, 'restore'])->name('patient.restore');
    //Drugs
    Route::resource('drugs', DrugController::class);
    //Labs
    Route::resource('labtest', LabTestController::class);
    //Diagnoses
    Route::resource('diagnoses', DiagnosesController::class);
    //Medical Records
    Route::resource('records', RecordController::class);

});
