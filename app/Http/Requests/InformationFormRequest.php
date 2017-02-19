<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InformationFormRequest extends FormRequest
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
            'first_name'            => 'required|min:3',
            'last_name'             => 'required|min:3',
            'email'                 => 'required|email|unique:email',
            'bsn'                   => 'required|min:3|unique:bsn',
            'credit_card_number'    => 'required|min:3',
            'civ'                   => 'required|min:3'
        ];
    }
}