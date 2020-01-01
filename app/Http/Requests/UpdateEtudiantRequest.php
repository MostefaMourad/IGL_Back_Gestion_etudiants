<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEtudiantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'max:255|email|unique:etudiants',  
            'password' => 'min:6',  
            'niveau' => 'max:3',
            'section' => 'max:1|nullable',
            'groupe' => 'integer|nullable',
            'spacialite' => 'max:3|nullable',
            'adresse' => 'max:100',
        ];
    }
}
