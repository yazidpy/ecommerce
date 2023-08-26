<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class Produit_form_request extends FormRequest
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
            'nom_produit'=>['required','min:4'],
            'description'=>['required','min:8'],
            'marque'=>['required','min:4'],
            'prix'=>['required','min:0','integer'],
            'stock'=>['required','integer','min:0'],
            'image'=>['image','max:2000','required'],
            'categorie_id'=>['required','integer']
        ];
    }
}
