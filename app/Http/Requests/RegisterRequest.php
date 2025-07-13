<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'firstName' => ['required', 'string', 'max:50'],
            'lastName'  => ['required', 'string', 'max:50'],
            'username'  => ['required', 'string', 'alpha_num', 'unique:admins,username', 'min:3', 'max:30'],
            'email'     => ['required', 'string', 'email', 'max:255', 'unique:admins,email'],
            'password'  => ['required', 'string', 'min:8', 'confirmed'],

        ];
    }

    function messages(){
        return[
            
            "required" => "لازم تكتب هنا حاجة",
            "string" => "لازم يكون نص ",
            "unique" => "أكتب اسم مستخد تاني غير ده", 
            "min" => "قليل اوي اكتب حاجة اكتر ! ", 
            "max" => "! لا قلل شوية الكتابة ", 
            "alpha_num" => "مينفعش يكون فيه رموز" ,
        ];
    }
}
