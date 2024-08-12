<?php

namespace Modules\User\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\User\App\Models\UserModel;

class CreateUserRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name'=>"required",
            'email'=>"required|unique:user,email",
            'password'=>"required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/",
            'role'=>"required",
            'phone'=>"required",
            'gender'=>"required",
            // 'date_of_birth'=>"required"  
        ];
    }
    public function messages(): array{
        return [
            'name.required'=>"Name is required",
            'email.required'=>"Email is required",
            'email.unique'=>"Email already exists",
            'password.required'=>"Password is required",
            'password.min'=>"Password must be at least 8 characters long",
            'password.regex'=>"Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character",
            'phone.required'=>"Phone number is required",
            'gender.required'=>"Gender is required",
            // 'date_of_birth.required'=>"Date of Birth is Required"
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
