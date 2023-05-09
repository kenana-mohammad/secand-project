<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class settingRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'title'=>'string|nullable',
            'decsrption'=>'string|nullable',
            'email'=>'email|nullable',
            'phone'=>'string|nullable',
            'adddress'=>'string|nullable',
            'logo'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'favicon'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'facebook'=>'string|nullable',
            
            'instagram'=>'string|nullable',
           
        ];
    }
}
