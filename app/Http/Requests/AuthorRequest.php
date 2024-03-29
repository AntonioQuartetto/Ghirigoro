<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'surname' => 'required|string'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Nome obbligatorio',
            'name.string' => 'Solo lettere consentite',
            'surname.required' => 'Cognome obbligatorio',
            'surname.string' => 'Solo lettere consentite'
        ];
    }
}
