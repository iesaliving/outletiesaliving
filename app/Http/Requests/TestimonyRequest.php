<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonyRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
        $rules = [
            'name'          => 'required|max:100',
            'text'          => 'required|max:600',
        ];


        if($this->file('imgInp'))        
            $rules = array_merge($rules, ['imgInp'  => 'nullable|image|mimes:jpeg,png,jpg|dimensions:width=184,height=184']);

        return $rules;
    }
}
