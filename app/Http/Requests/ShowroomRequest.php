<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShowroomRequest extends FormRequest
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
            'title'          => 'required|max:100',
            'description'    => 'required|max:500', 
            'title_d.*'      => 'array', 
            'title_d.*'      => 'nullable|max:100',
            'imgInp'         => 'nullable|image|mimes:jpeg,png,jpg|dimensions:width=1920,height=1080',
            'img.*'          => 'nullable|image|mimes:jpeg,png,jpg|dimensions:width=407,height=300',         
        ];

         if($this->file('img'))        
            $rules = array_merge($rules, ['img.*'  => 'mimes:jpg,jpeg,png|dimensions:width=407,height=300']);
        

        return $rules;
    }
}
