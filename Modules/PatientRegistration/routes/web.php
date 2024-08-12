<?php

use Illuminate\Support\Facades\Route;
use Modules\PatientRegistration\App\Http\Controllers\PatientRegistrationController;

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

Route::group(['middleware'=>['auth']], function () { //middleware to protect the routes
    Route::resource('patientregistration', PatientRegistrationController::class)->names('patientregistration');
});
