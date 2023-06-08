<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'title' => 'required|string',
            'pages' => 'required|integer',
            'author_id' => 'required',
            'year' => 'required|integer',
            'image' => "mimes:png,jpg"
        ];
    }
    public function messages(){

        return [
            'title.required' => 'Titolo Obbligatorio',
            'title.string' => 'Consentite solo lettere',
            'pages.required' => 'Numero delle pagine obbligatorio',
            'pages.integer' => 'Consentiti solo numeri',
            'author_id.required' => 'Autore Obbligatorio',
            'year.required' => 'Anno obbligatorio',
            'year.integer' => 'Consentiti solo numeri',
            'image.mimes' => 'Consentiti solo questi formati'
        ];
    }
}
