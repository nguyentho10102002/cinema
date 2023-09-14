<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckIdPhimRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id'    =>  'required|exists:chuyen_xes,id',
        ];
    }

    public function messages()
    {
        return [
            'id.*'  => 'Chuyến xe phải tồn tại trong hệ thống!',
        ];
    }
}
