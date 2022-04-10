<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstateRequest extends FormRequest
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
            'name'=>'required|text',
            'description'=>'required|text',
            'img'=>'required|image',
            'properties'=>'required|text',
            'phone_number'=> ['required','numeric' ,'digits:11', 'regex:/^09[0-9]*$/'],
        ];
    }
}
