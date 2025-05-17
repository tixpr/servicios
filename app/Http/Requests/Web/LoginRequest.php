<?php

namespace App\Http\Requests\Web;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ];
    }
    public function attributes(): array
    {
        return [
            'email' => 'Correo',
            'password' => 'Contrasena',
        ];
    }
    public function messages(): array
    {
        return [
            'email.required' => 'El correo es obligatorio',
            'email.email' => 'Correo invalido',
            'email.exists' => 'Correo no registrado',
            'password.required' => 'La constrasena es obligatoria'
        ];
    }
}
