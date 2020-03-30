<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class PartnerRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => \Str::slug($this->input('name')),
        ]);
    }

    public function rules()
    {

        $id=is_null($this->partner) ? $this->partner : \Crypt::decryptString($this->partner);

        $rules = [
            'name'             => 'required|unique:partners,name,' . $id,
            'slug'             => 'required|unique:partners,slug,' . $id,
            'phone'            => 'nullable|max:100',
            'fax'              => 'nullable|max:100',
            'email'            => 'nullable|email|max:100',         
            'excerpt.*'        => 'required',
            'biography.*'      => 'required',
            'status'           => 'required|in:PARTNER,ASSOCCIATE,OF COUNSEL',            
        ];

        if($this->get('image'))        
            $rules = array_merge($rules, ['image'   => 'image|mimes:jpeg,png,jpg|max:2048']);
        if($this->get('image_hover'))        
            $rules = array_merge($rules, ['image'   => 'image|mimes:jpeg,png,jpg|max:2048']);
        if($this->get('rectangular_image'))        
            $rules = array_merge($rules, ['image'   => 'image|mimes:jpeg,png,jpg|max:2048']);

        return $rules;
    }
}
