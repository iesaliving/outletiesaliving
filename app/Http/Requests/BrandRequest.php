<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
       $rules = [
            'name'            => 'required|max:100|unique:brands,name,' . $this->brand,
            'intro'           => 'required',
            'imgInp'          => 'nullable|image|mimes:jpeg,png,jpg|dimensions:width=1920,height=1080',
            'img_mobil'       => 'nullable|image|mimes:jpeg,png,jpg|dimensions:width=375,height=345',
            'title_d.*'       => 'nullable|max:100'

        ];

        if($this->file('imgsoc'))        
            $rules = array_merge($rules, ['imgsoc'  => 'mimes:jpg,jpeg,png|dimensions:width=1920,height=400']);
    
        if($this->file('imgsoc'))        
            $rules = array_merge($rules, ['imgsoc'  => 'mimes:jpg,jpeg,png|dimensions:width=650,height=490']);
        
        if($this->file('imgs'))        
            $rules = array_merge($rules, ['imgs.*'  => 'mimes:jpg,jpeg,png|dimensions:min_width=117,max_width=650,min_height=117,max_height=490']);

        if($this->file('imglogo'))        
            $rules = array_merge($rules, ['imgsoc'  => 'image|mimes:jpg,jpeg,png']);


        return $rules;

    }
}
