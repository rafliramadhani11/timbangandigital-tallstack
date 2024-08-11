<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
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
            'email' => 'email|required|max:50',
            'password' => 'required|confirmed|min:3'
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'Email harus di isi',


            'password.required' => 'Password harus di isi',
            'password.confirmed' => 'Password tidak sama dengan Password Confirmation',
        ];
    }
}
