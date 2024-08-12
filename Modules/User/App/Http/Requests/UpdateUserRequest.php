<?php

namespace Modules\User\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\User\App\Models\UserModel;

class UpdateUserRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {  
        $userID=request()->route('id');
        //  dd($userID); 
        return [
            'name' => 'required',   
            'email' => 'required|email|max:255|unique:user,email,' . $userID, // Ignore the current user's email
            'password'=>"required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/",
            'role'=>"required",
            'phone'=>"required",
            'gender'=>"required",
            
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
