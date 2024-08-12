<?php

namespace Modules\PatientRegistration\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\PatientRegistration\App\Models\PatientModel;

class createPatientRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|max:20',
            'last_name' => 'required|max:10',
            'phone_number' =>'required',
            'gender' => 'required',
            'date_of_birth' => 'required',
            'next_of_kin' => 'required',
            'nok_phone_number' => 'required',
            'relationship'=>'required'
            ,

        ];
    }
    public function messages(): array{
        return [
            'first_name.required' => 'First name is required',
            'first_name.max' => 'First name should not exceed 20 characters',
            'last_name.required' => 'Last name is required',
            'last_name.max' => 'Last name should not exceed 10 characters',
            'phone_number.required' => 'Phone number is required',
            'gender.required' => 'Gender is required',
            'date_of_birth.required' => 'Date of birth is required',
            'next_of_kin.required' => 'Next of kin is required',
           'relationship.required' => 'Relationship is required',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
}
