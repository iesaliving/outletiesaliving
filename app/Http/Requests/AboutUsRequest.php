<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutUsRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
        $rules = [
            'title'            => 'required|max:100',
            'description'      => 'required',
            'title_obj'        => 'required|max:100',
            'title_d'          => 'required|max:100',
            'imgInp'           => 'nullable|image|mimes:jpeg,png,jpg|dimensions:width=1920,height=1080',
            'img_mobil'        => 'nullable|image|mimes:jpeg,png,jpg|dimensions:width=375,height=345',
            'imgObj'           => 'nullable|image|mimes:jpeg,png,jpg|dimensions:width=650,height=500',
        ];

         if($this->file('slide'))        
            $rules = array_merge($rules, ['slide.*'  => 'mimes:jpg,jpeg,png|dimensions:width=407,height=250']);

        return $rules;
    }

    public function messages()
    {
        return [
            'imgObj.dimensions'    => ' El campo :attribute debe tener dimensiones de 650 x 500',
            'imgInp.dimensions'    => ' El campo :attribute debe tener dimensiones de 1920 x 1080',
            'img_mobil.dimensions' => ' El campo :attribute debe tener dimensiones de 375 x 345',
        ];
    }

    public function attributes()
    {
        return [
            'imgObj'       => 'Imagen Objetivo',
            'imgInp'       => 'Imagen principal',
            'img_mobil'    => 'Imagen mobil',
        ];
    }
}
