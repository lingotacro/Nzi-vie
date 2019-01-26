<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SocialFormRequest extends FormRequest
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
    public function messages(){
        return [
            'nom.required' => ' ce champ est requis',
            'lien.required' => ' ce champ est requis',
            'lien.unique' => ' ce lien existe deja veuillez entrer un lien différent',
        ];
    }
    public function rules()
    {
        return [
            'nom' => 'required',
            'lien' => 'required|unique:socials'
        ];
    }
}
