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
            'img.*'            => 'nullable|image|mimes:jpeg,png,jpg|dimensions:width=407,height=250',
        ];

        return $rules;
    }
}
