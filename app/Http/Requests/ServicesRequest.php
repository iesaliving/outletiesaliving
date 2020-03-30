<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicesRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        
        $rules = [
            'title'            => 'required|max:100',
            'description'      => 'required|max:700',
            'title_st'         => 'required|max:100',
            'description_st'   => 'required|max:700',
            'telf_st'          => 'required|max:100',
            'telw_st'          => 'required|max:100',
            'email_st'         => 'required|max:100',
            'title2'           => 'required|max:100',
            'description2'     => 'required|max:700',
            'title_cs'         => 'required|max:100',
            'description_cs'   => 'required|max:700',
            'telf_cs'          => 'required|max:100',
            'telw_cs'          => 'required|max:100',
            'email_cs'         => 'required|max:100',
            'title3'           => 'required|max:100',
            'description3'     => 'required|max:700',
                      
        ];

        if($this->file('imgInp'))        
            $rules = array_merge($rules, ['imgInp'  => 'mimes:jpg,jpeg,png|dimensions:min_width=1920,min_height=1080,max_width=1920,max_height=1080']);
        
        if($this->file('img_mobil'))        
            $rules = array_merge($rules, ['img_mobil'  => 'mimes:jpg,jpeg,png|dimensions:width=375,height=345']);

        if($this->file('img_st'))        
            $rules = array_merge($rules, ['img_st'  => 'mimes:jpg,jpeg,png|dimensions:width=650,height=490']);

        if($this->file('imag_cs'))        
            $rules = array_merge($rules, ['imag_cs'  => 'mimes:jpg,jpeg,png|dimensions:width=650,height=490']);
        
        if($this->file('img'))        
            $rules = array_merge($rules, ['img.*'  => 'mimes:jpg,jpeg,png|dimensions:width=650,height=490']);


        return $rules;
    }
}
