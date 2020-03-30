<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
class PostStoreRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
        $id=is_null($this->post) ? $this->post : \Crypt::decryptString($this->post);

        $rules = [
            'name'             => 'required|unique:posts,name,' . $id,
            'partner_id'       => 'nullable|integer',
            'title.*'          => 'nullable|max:128',
            'excerpt.*'        => 'nullable',
            'body.*'           => 'nullable',
            'publication_date' => 'required',
            'status'           => 'required|in:DRAFT,PUBLISHED',            
        ];

        return $rules;
    }
}
