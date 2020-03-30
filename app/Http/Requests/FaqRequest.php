<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FaqRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
        $rules = [
            'title'          => 'required|max:100',
            'description'    => 'required',   
            'imgInp'         => 'nullable|image|mimes:jpeg,png,jpg|dimensions:width=1920,height=1080', 
            'img_mobil'      => 'nullable|image|mimes:jpeg,png,jpg|dimensions:width=375,height=345',       
        ];

        if($this->file('logo')){      
            $rules = array_merge($rules, ['logo'  => 'mimes:jpg,jpeg,png|dimensions:width=120,height=120']);
        }
        
        return $rules;
    }
}