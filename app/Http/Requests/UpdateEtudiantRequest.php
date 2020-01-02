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
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|max:255|email|unique:etudiants',  
            'password' => 'required|min:6',
            'nom' => 'required|max:25',
            'prenom' => 'required|max:25',  
            'niveau' => 'required|max:3',
            'section' => 'max:1|nullable',
            'groupe' => 'integer|nullable',
            'spacialite' => 'max:3|nullable',
            'date_naissance' => 'required|date_format:Y-m-d|before:today',
            'adresse' => 'required|max:100|',
            'indicateur_promo' => 'max:1|required'
    }
}
