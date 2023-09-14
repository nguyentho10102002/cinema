<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class XoaLichRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id'    =>  'required|exists:lich_trinhs,id',
        ];
    }

    public function messages()
    {
        return [
            'id.*'    =>  'Lịch trình không tồn tại!',
        ];
    }
}
