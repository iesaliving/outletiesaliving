<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoticePrivacyRequest extends FormRequest
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
            'title'            => 'required|max:200',
            'intro'            => 'required',
            'description'      => 'required',
        ];

        if($this->file('imgInp'))        
            $rules = array_merge($rules, ['imgInp'  => 'mimes:jpg,jpeg,png|dimensions:width=1920,height=1080']);
        
        if($this->file('img_mobil'))        
            $rules = array_merge($rules, ['img_mobil'  => 'mimes:jpg,jpeg,png|dimensions:width=375,height=345']);

        return $rules;
    }
}
