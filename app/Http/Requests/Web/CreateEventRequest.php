<?php

namespace App\Http\Requests\Web;

use Illuminate\Foundation\Http\FormRequest;

class CreateEventRequest extends FormRequest
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
            'name' => 'required',
            'init_date' => 'required|date',
            'end_date' => 'required|date'
        ];
    }
    public function attributes(): array
    {
        return [
            'name' => 'Nombre del evento',
            'init_date' => 'Inicio del evento',
            'end_date' => 'Fin del evento'
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'El nombre del evento es requerido',
            'init_date.required' => 'El inicio del evento es requerido',
            'init_date.date'=>'El inicio del evento debe de ser una fecha',
            'end_date.required' => 'El fin del evento es requerido',
            'end_date.date'=>'El fin del evento debe de ser una fecha',
        ];
    }
}
