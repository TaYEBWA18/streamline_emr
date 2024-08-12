<?php

namespace Modules\PatientRegistration\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\PatientRegistration\App\Models\Patient;

class createPatientRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'First_name' => 'required|max:20',
            'last_name' => 'required|max:10',
            'gender' => 'required',
            'date_of_birth' => 'required',
            'phone_number' => 'required',
            'nok' => 'required',
            'nok_phone_number' => 'required',
            'relationship'=>'required',
            'user_id' => 'required',

        ];
    }
    public function messages(): array{
        return [
            'First_name.required' => 'First name is required',
            'First_name.max' => 'First name should not exceed 20 characters',
            'last_name.required' => 'Last name is required',
            'last_name.max' => 'Last name should not exceed 10 characters',
            'phone_number.required' => 'Phone number is required',
            'gender.required' => 'Gender is required',
            'date_of_birth.required' => 'Date of birth is required',
            'nok.required' => 'Next of kin is required',
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
