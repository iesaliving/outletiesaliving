<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeRequest extends FormRequest
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
            'id.*'             => 'integer',
            'id'               => 'array',
            'title'            => 'required|array',
            'title.*'          => 'max:100',
            'text'             => 'nullable|array',
            'imgInp'           => 'nullable|image|mimes:jpeg,png,jpg|dimensions:width=1920,height=1080',
            'img_mobil'        => 'nullable|image|mimes:jpeg,png,jpg|dimensions:width=375,height=345',
            'img.*'            => 'nullable|image|mimes:jpeg,png,jpg|dimensions:width=650,height=590',     

        ];

        return $rules;
    }
}
