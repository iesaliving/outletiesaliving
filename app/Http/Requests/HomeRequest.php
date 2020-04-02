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



    public function messages()
    {
        return [
            'img.dimensions'       => ' El campo :attribute debe tener dimensiones de 650 x 590',
            'imgInp.dimensions'    => ' El campo :attribute debe tener dimensiones de 1920 x 1080',
            'img_mobil.dimensions' => ' El campo :attribute debe tener dimensiones de 375 x 345',
        ];
    }

    public function attributes()
    {
        return [
            'img.*'     => 'Imagen',
            'imgInp'    => 'Imagen principal',
            'img_mobil' => 'Imagen mobil',
        ];
    }
}
