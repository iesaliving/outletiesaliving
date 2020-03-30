<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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

   
    public function rules()
    {
        $rules = [
            'title'            => 'required|max:100',
            'description'      => 'required|max:600',
            'imgInp'           => 'nullable|image|mimes:jpeg,png,jpg|dimensions:width=1920,height=1080',
            'img_mobil'        => 'nullable|image|mimes:jpeg,png,jpg|dimensions:width=375,height=345',

        ];

      
        return $rules;
    }
}
