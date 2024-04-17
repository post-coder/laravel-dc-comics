<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|max:255',
            'description' => 'required|max:5000',
            'thumb' => 'required|max:5000',
            'price' => 'required|max:7',
            'series' => 'required|max:100',
            'sale_date' => 'required|date',
            'type' => 'required|max:100',
            'artists' => 'max:5000|nullable',
            'writers' => 'max:5000|nullable',
        ];
    }

    public function messages(): array {

        return [
            'title.required' => "Devi inserire un titolo",
            'title.max' => "Il titolo può avere massimo :max caratteri",
            'description.required' => 'Devi inserire una descrizione',

            'max' => 'Il campo :attribute deve avere massimo :max caratteri',
            'required' => ':attribute deve essere compilato'
        ];

    }

    public function attributes(): array {
        
        return [
            'title' => 'titolo',
            'description' => 'descrizione',
            'thumb' => 'immagine',
            'price' => 'prezzo',
            'series' => 'serie',
            'sale_date' => 'data di pubblicazione',
            'type' => 'tipologia',
            'artists' => 'artisti',
            'writers' => 'scrittori',
        ];
        
    }
}
